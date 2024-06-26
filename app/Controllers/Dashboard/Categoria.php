<?php


namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\CategoriaModel;

class Categoria extends BaseController
{

    public function new()
    {
        echo view('dashboard/categoria/new');
    }
    public function show($id)
    {

        $categoriaModel = new CategoriaModel();

        echo view('dashboard/categoria/show', [
            'categoria' => $categoriaModel->find($id)
        ]);
    }
    public function create()
    {

        $categoriaModel = new CategoriaModel();


        if ($this->validate('categorias')) {
            $data = [
                'titulo' => $this->request->getPost('titulo'),

            ];
        } else {
            session()->setFlashdata([
                'validation' => $this->validator
            ]);
            //funcion interna que devulede los campos anterioes 
            return redirect()->back()->withInput();
        }

        $categoriaModel->save($data);
        return redirect()->to('dashboard/categoria')->with('mensaje', 'Registro gestionado correctamente');




        // $peliculaModel->insert([

        //     'titulo' => $this->request->getPost('titulo'),
        //     'descripcion'    => $this->request->getPost('descripcion'),
        // ]);










    }

    public function edit($id)
    {
        $categoriaModel = new CategoriaModel();

        echo view('dashboard/categoria/edit', ['categoria' => $categoriaModel->find($id)]);
    }
    public function update($id)
    {
        $categoriaModel = new CategoriaModel();

        if ($this->validate('categorias')) {
            $categoriaModel->update($id, [
                'titulo' => $this->request->getPost('titulo')

            ]);
        } else {
            session()->setFlashdata([
                'validation' => $this->validator
            ]);
            //funcion interna que devulede los campos anterioes 
            return redirect()->back()->withInput();
        }
        return redirect()->to('dashboard/categoria')->with('mensaje', 'Actualizacion  correctamente');
    }
    public function delete($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);
        session()->setFlashdata('mensaje', ' gestionado Eliminado correctamente');
        return redirect()->back();
        // return redirect()->to('dashboard/categoria')->with('mensaje',' gestionado Eliminado correctamente');

    }
    public function index()
    {
        session()->set('key', 'value');
        //$data=[];
        $categoriaModel = new CategoriaModel();

        echo view('dashboard/categoria/index', [
            'nombrevariablevista2' => $categoriaModel->findAll()
        ]);
    }
}
