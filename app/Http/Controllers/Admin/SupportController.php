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
        dd($suportes);

        return view('admin/supports/index');
    }

    public function create(Request $request)
    {
        return view('admin/supports/create');
    }
}
