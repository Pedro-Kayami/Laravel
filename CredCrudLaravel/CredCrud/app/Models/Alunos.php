<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $fillable = [
        'Nome', 'RA', 'DataNasc', 'Foto', 'Celular', 'Email'
    ];
}
