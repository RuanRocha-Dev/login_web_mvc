<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LoginModel;

class Login extends Controller{
    
    public function edit () 
    {
        $login = new LoginModel();
        $result = $login->get();
        echo json_encode($result);
    }
}