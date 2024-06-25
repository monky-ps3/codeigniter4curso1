<?php


namespace App\Controllers;


use App\Models\PeliculaModel;

class Pelicula extends BaseController
{

    public function new()
    {
        echo view('pelicula/new');
    }
    public function show($id)
    {
        $peliculaModel = new PeliculaModel();

        echo view('pelicula/show', [
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
         echo "insertado correcto";


        // $peliculaModel->insert([

        //     'titulo' => $this->request->getPost('titulo'),
        //     'descripcion'    => $this->request->getPost('descripcion'),
        // ]);
    }

    public function edit($id){
        $peliculaModel = new PeliculaModel();

       echo view('pelicula/edit',['pelicula'=>$peliculaModel->find($id)]);
    }
    public function update($id){
        $peliculaModel= new PeliculaModel();

        $peliculaModel->update($id,[
            'titulo'=> $this->request->getPost('titulo'),
            'descripcion'=>$this->request->getPost('descripcion')
            ]);

            echo "update ";
    }
    public function delete($id){
        $peliculaModel = new PeliculaModel();
        $peliculaModel->delete($id);
        echo "delete";
    }
    public function index()
    {

        //$data=[];
        $peliculaModel = new PeliculaModel();

        echo view('pelicula/index', [
            'nombrevariablevista2' => $peliculaModel->findAll()
        ]);
    }
}
