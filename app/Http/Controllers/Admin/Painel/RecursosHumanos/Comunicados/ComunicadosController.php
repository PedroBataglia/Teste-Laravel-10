<?php

namespace App\Http\Controllers\Admin\Painel\RecursosHumanos\Comunicados;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Arquivos;

class ComunicadosController extends Controller
{
    public function index(Arquivos $arquivo)
    {
        $arquivos = $arquivo->all();
        dd($arquivos);
        
        return view('admin/painel/comunicados/index'); 
    }
}
