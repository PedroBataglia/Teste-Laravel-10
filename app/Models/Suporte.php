<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suporte extends Model
{
    use HasFactory;


    public function index()
    {
        $suporte = new Suporte();
        $suportes = $suporte->all();

        return view('admin/supports/index');
    }
}
