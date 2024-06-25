<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        $usuario = "admin";
        $passsword = password_hash("123", PASSWORD_DEFAULT);
        $type = "admin";
        $data = [
            'usuario' => $usuario,
            'password'    => $passsword,
            'type' =>  $type
        ];

        // Simple Queries
        //  $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('t_usuario')->insert($data);
    }
}
