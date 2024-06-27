<?php


namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\PeliculaModel;

class Pelicula extends BaseController
{

    public function new()
    {
        echo view('dashboard/pelicula/new');
    }
    public function show($id)
    {
        $peliculaModel = new PeliculaModel();

        echo view('dashboard/pelicula/show', [
            'pelicula' => $peliculaModel->find($id)
        ]);
    }
    public function create()
    {

        $peliculaModel = new peliculaModel();
        $data = [
            'titulo' => $this->request->getPost('titulo'),
            'descripcion'    => $this->request->getPost('descripcion'),
        ];

        $peliculaModel->save($data);
        return redirect()->to('dashboard/pelicula')->with('mensaje','insertado   correctamente');


        // $peliculaModel->insert([

        //     'titulo' => $this->request->getPost('titulo'),
        //     'descripcion'    => $this->request->getPost('descripcion'),
        // ]);
    }

    public function edit($id){
        $peliculaModel = new PeliculaModel();

       echo view('dashboard/pelicula/edit',['pelicula'=>$peliculaModel->find($id)]);
    }
    public function update($id){
        $peliculaModel= new PeliculaModel();

        $peliculaModel->update($id,[
            'titulo'=> $this->request->getPost('titulo'),
            'descripcion'=>$this->request->getPost('descripcion')
            ]);
   
            return redirect()->to('dashboard/pelicula')->with('mensaje','actualizado  correctamente');

    }
    public function delete($id){
        $peliculaModel = new PeliculaModel();
        $peliculaModel->delete($id);
        return redirect()->to('dashboard/pelicula')->with('mensaje','Eliminado  correctamente');

    }
    public function index()
    {

        //$data=[];
        $peliculaModel = new PeliculaModel();

        echo view('dashboard/pelicula/index', [
            'nombrevariablevista2' => $peliculaModel->findAll()
        ]);
    }
}
