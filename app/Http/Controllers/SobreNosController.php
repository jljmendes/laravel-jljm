<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
//Criando Metodo da pagina Sobre-nós.
{
    public function sobreNos(){
        return view('site.sobre-nos');
    }
}
