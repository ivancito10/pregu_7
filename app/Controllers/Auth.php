<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function index()
    {
        // Mostrar el formulario de inicio de sesión
        return view('login');
    }

    public function login()
    {
        // Lógica para verificar las credenciales del usuario
        $usuario = $this->request->getPost('username');
        $contrasena = $this->request->getPost('password');

        $usuarioModel = new UsuarioModel();
        $rol = $usuarioModel ->where('nombre', $usuario)
                            ->where('contraseña', $contrasena)
                            ->first();
        // Redirigir según el rol
        switch ($rol['rol']) {
            case 'Titular':
                return redirect()->to('titular');
                break;
            case 'Empleado':
                return redirect()->to('empleado');
                break;
            case 'Director Bancario':
                return redirect()->to(('director'));
                break;
            default:
                // En caso de un rol desconocido, redirigir a una página de error o mostrar un mensaje de error
                return redirect()->to(('error'));
                break;
        }
    }

    public function logout()
    {
        // Lógica para cerrar sesión y redirigir al formulario de inicio de sesión
        return redirect()->to(base_url('login'));
    }
}
