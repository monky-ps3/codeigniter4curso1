<?php

namespace App\Controllers\Web;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;


class Usuario extends BaseController
{
    public function crear_usuario()
    {
        $usuarioModel = new UsuarioModel();
        $usuarioModel->insert(
            [
                'usuario' => 'admin',
                'email' => 'monky.nuts@hotmail.com',
                'contrasena' => $usuarioModel->contrasenaHas('12345'),
            ]
        );
    }

    public function login()
    {
        echo view('web/usuarios/login');
    }
    //funcion para comprobar credenciales 

    public function login_post()
    {

        $usuarioModel = new UsuarioModel();

        $email = $this->request->getPost('email');
        $contrasena = $this->request->getPost('contrasena');

        $usuario = $usuarioModel->select('id,usuario,email,contrasena,type')
            ->orWhere('email', $email)
            ->orWhere('usuario', $email)
            ->first();

        if (!$usuario) {
            return redirect()->back()->with('mensaje', 'Usuario o contraseña inválido');
        }
        if ($usuarioModel->contrasenaVerificar($contrasena, $usuario->contrasena)) {
            // Eliminar la contraseña del objeto usuario
            unset($usuario->contrasena);
            // Guardar el usuario en la sesión
            session()->set('usuario', $usuario);
            return redirect()->to('/dashboard/categoria')->with('mensaje', "Bienvenid@" . $usuario->usuario);
        } else {
            return redirect()->back()->with('mensaje', 'usuario o contraseña invalido');
        }
    }
    public function register()
    {
        echo view('web/usuarios/register');
    }

    public function register_post()
    {
        $usuarioModel = new UsuarioModel();

        if ($this->validate('usuarios')) {
            $usuarioModel->insert([
                'usuario' => $this->request->getPost('usuario'),
                'email' => $this->request->getPost('email'),
                'contrasena' => $usuarioModel->contrasenaHas($this->request->getPost('contrasena')),
            ]);
            return redirect()->to(base_url('login'))->with('mensaje', "Registro exitoso");

        }
        session()->setFlashdata([
         'validation'=>$this->validator
        ]);
        return redirect()->back()->withInput();
    }
//cerrar session
    public function logout(){
    session()->destroy();
    return redirect()->to(base_url('login'));
    }
}
