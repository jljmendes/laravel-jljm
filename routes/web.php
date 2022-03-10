<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Criando as rotas
Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function(){return 'Login';})->name('site.login');

//Rotas app criando grupo
//Renomeando as rotas
Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedor');
    Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
});
/*
Route::get('/rota1', function(){
    echo 'Rota1';
})->name('site.rota1');

Route::get('/rota2', function(){
    echo 'Rota2';
})->name('site.rota2');

Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');
*/

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

Route::fallback(function(){
    echo 'Arota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a>para ir para página inicial';
});

//Direcionando rota2 para rota1
//Route::redirect('/rota2', '/rota1');

/*
//Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',
Route::get('/contato/{nome}/{categoria_id}',
//Se colocar "" aspas dupla não precisa concatenar.
// echo "Estamos aqui: $nome - $categoria -  $assunto - $mensagem;"
function(string $nome = 'Desconhecido', int $categoria_id = 1
    ){
    //echo 'Estamos aqui: '.$nome.' - '.$categoria.' - '.$assunto.' - '.$mensagem;
    echo "Estamos aqui: $nome - $categoria_id";
    }//Utilizando expressão regular
)->where('nome', '[A-Za-z]+')->where('catedoria_id', '[0-9]+');
*/
