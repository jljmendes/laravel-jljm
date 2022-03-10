<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
//Criando Metodo da pagina Contato.
{
    public function contato(){

        var_dump($_POST);
        return view('site.contato');
    }

}
