<?php

namespace App\Models;

use CodeIgniter\Model;

class CuentaBancariaModel extends Model
{
    protected $table = 'cuentabancaria';
    protected $primaryKey = 'id_cuenta';
    protected $allowedFields = ['id_persona', 'numero_cuenta', 'saldo', 'tipo_cuenta'];

    public function obtenerCuentas()
    {
        return $this->findAll();
    }

    public function eliminarCuenta($id)
    {
        return $this->delete($id);
    }
}
