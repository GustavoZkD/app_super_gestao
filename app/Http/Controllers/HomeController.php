<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MotivoContato;

class HomeController extends Controller
{
    public function principal(){
        $motivo_contatos = MotivoContato::all();
        return view('site.principal', ['motivo_contatos' => $motivo_contatos]);
    }
}
