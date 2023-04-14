<?php

namespace App\Http\Controllers\Admin\Painel\RecursosHumanos\Paginas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Model\Pagina;

class PaginasController extends Controller
{
    public function index(Pagina $pagina)
    {
        $paginas = $pagina->all();
        return view('admin/paginas/index');
    }
}
