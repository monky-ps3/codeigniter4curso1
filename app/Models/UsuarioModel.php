<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    //  protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    //protected $useSoftDeletes   = false;
    //protected $protectFields    = true;
    protected $allowedFields    = ['usuario','email','contrasena'];

  public function contrasenaHas($contrasenaHash){
    return password_hash($contrasenaHash,PASSWORD_DEFAULT);
  }

  public function contrasenaVerificar($contrasenaPlano,$contrasenaHash){
    return password_verify($contrasenaPlano,$contrasenaHash);

}
}
