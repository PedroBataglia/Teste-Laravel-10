<?php

namespace App\Http\Controllers\projeto2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index(Usuario $usuario)
    {
        $usuarios = Usuario::all();
        return view('projeto2.usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('projeto2.usuarios.create');
    }

    public function store(Request $request)
    {

        redirect('projeto2.usuarios.index');
    }

}
