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

    public function store(Request $request, Usuario $usuario)
    {
        $data = $request->all();
        $data['status_id'] = 1;

        $usuario = $usuario->create($data);

        return redirect()->route('projeto2.usuarios.index');
    }

}
