<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class directorcontroler extends Controller{
    public function index()
    {
        // Creamos una instancia del modelo UsuarioModel
        $usuarioModel = new UsuarioModel();

        // Obtener los resultados del modelo
        $resultados = $usuarioModel->obtenerMontosYSaldosPorDepartamento();

        // Pasar los resultados a la vista
        $data['resultados'] = $resultados;

        // Cargar la vista con los datos
        return view('director', $data);
    }
}
