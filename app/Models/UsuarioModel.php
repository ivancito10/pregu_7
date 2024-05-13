<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'persona';
    protected $primaryKey = 'id_persona';
    protected $allowedFields = ['nombre', 'apellido', 'edad', 'rol', 'direccion', 'contraseña' ];

    public function obtenerUsuarios()
    {
        return $this->findAll();
    }

    public function eliminarUsuario($id)
    {
        return $this->delete($id);
    }

    //hacer una funcion que permita visualizar los montos existentes por departamento(agregados), dando la vuelta al resultado (CASE-WHEN)
    public function obtenerMontosYSaldosPorDepartamento()
    {
        return $this->db->query("
            SELECT 
                CASE departamento
                    WHEN 'La Paz' THEN 'La Paz'
                    WHEN 'Oruro' THEN 'Oruro'
                    WHEN 'Potosí' THEN 'Potosí'
                    WHEN 'Cochabamba' THEN 'Cochabamba'
                    WHEN 'Santa Cruz' THEN 'Santa Cruz'
                    WHEN 'Beni' THEN 'Beni'
                    WHEN 'Pando' THEN 'Pando'
                    WHEN 'Tarija' THEN 'Tarija'
                    WHEN 'Chuquisaca' THEN 'Chuquisaca'
                    ELSE 'Otro'
                END AS departamento,
                SUM(saldo) AS saldo_total
            FROM 
                persona
            JOIN 
                cuentabancaria 
            ON 
                persona.id_persona = cuentabancaria.id_persona
            GROUP BY 
                departamento
        ")->getResult();
    }
}

?>
