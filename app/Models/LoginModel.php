<?php 
namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model{
    // protected $table = '';
    

    public function get () {
        $sql = "select * from usuarios";
        return $sql;
    }
}