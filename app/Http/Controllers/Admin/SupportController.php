<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Suporte;
use Illuminate\Http\Request;

class SupportController extends Controller
{


    public function index(Suporte $suporte)
    {
        $suportes = $suporte->all();

        return view('admin/supports/index', compact('suportes'));
    }

    public function create()
    {
        return view('admin/supports/create');
    }

    public function store()
    {
        dd('Está funcionando');
    }
}
