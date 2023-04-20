<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'departamento_id',
        'other_departament',
        'status_id',
    ];
}
