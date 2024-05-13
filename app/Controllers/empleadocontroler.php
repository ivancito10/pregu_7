<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class empleadocontroler extends Controller{
    public function index(){
        return view('empleado');
    }
}