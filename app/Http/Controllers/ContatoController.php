<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
//Criando Metodo da pagina Contato.
{
    public function contato(){
        return view('site.contato');
    }
}
