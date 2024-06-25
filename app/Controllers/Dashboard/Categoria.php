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
        $data = [
            'titulo' => $this->request->getPost('titulo'),
           
        ];

        $categoriaModel->save($data);
         echo "insertado correcto";


        // $peliculaModel->insert([

        //     'titulo' => $this->request->getPost('titulo'),
        //     'descripcion'    => $this->request->getPost('descripcion'),
        // ]);
    }

    public function edit($id){
        $categoriaModel = new CategoriaModel();

       echo view('dashboard/categoria/edit',['categoria'=>$categoriaModel->find($id)]);
    }
    public function update($id){
        $categoriaModel = new CategoriaModel();

        $categoriaModel->update($id,[
            'titulo'=> $this->request->getPost('titulo')
           
            ]);

            echo "update ";
    }
    public function delete($id){
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);
        echo "delete";
    }
    public function index()
    {

        //$data=[];
        $categoriaModel = new CategoriaModel();

        echo view('dashboard/categoria/index', [
            'nombrevariablevista2' => $categoriaModel->findAll()
        ]);
    }
}
