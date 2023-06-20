<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // bem simples esse controller
        // HomeController nao passa dados,
        // apenas retorna a home com os cards e atalhos
        return view('index');
    }
}
