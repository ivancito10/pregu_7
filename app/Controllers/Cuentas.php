<?php

namespace App\Controllers;

use App\Models\CuentaBancariaModel;
use CodeIgniter\Controller;

class Cuentas extends Controller
{
    public function index()
    {
        $cuentaModel = new CuentaBancariaModel();
        $data['cuentas'] = $cuentaModel->obtenerCuentas();

        return view('cuentas', $data);
    }

    public function eliminar($id)
    {
        $cuentaModel = new CuentaBancariaModel();
        $cuentaModel->eliminarCuenta($id);
        
        return redirect()->to(base_url('cuentas'));
    }
}
