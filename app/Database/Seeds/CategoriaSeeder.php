<?php

namespace App\Database\Seeds;

use App\Models\CategoriaModel;
use CodeIgniter\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    public function run()
    {

        $this->db->table('categorias')->where('id >=',1)->delete();
        for ($i = 0; $i < 20; $i++) {

            $this->db->table('categorias')->insert(
                [
                    'titulo' => "Categoria $i",
                    
                ]
            );
        }
        //data de prueba , cargar modelo 
        $this->db->table('categorias');
        //$categoriasModelo=new CategoriaModel();

    }
}
