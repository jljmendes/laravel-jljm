<h3>Fornecedor</h3>
{{-- Criando comentário --}}

@php
/*

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif (count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados<h3/>
@else
    <h3>Ainda não existem fornecedores cadastrados<h3/>
@endif
if(){

    }elseif () {
        # code...@dd($fornecedores)
    }else {
        # code...
    }
    <strong>Fornecedores:</strong> {{ $fornecedores[0]['nome'] }}<br>
<strong>Status:</strong> {{ $fornecedores[0]['status'] }}<br>
@if ($fornecedores[0]['status'] == 'N')
    <strong>Fornecedor:</strong> inativo
@endif
    */
@endphp

<strong>Fornecedores:</strong> {{ $fornecedores[0]['nome'] }}<br>
<strong>Status:</strong> {{ $fornecedores[0]['status'] }}<br>
@if ( !($fornecedores[0]['status'] == 'S') )
    <strong>Fornecedor:</strong> inativo
@endif<br><br>
@unless ($fornecedores[0]['status'] == 'S')
<strong>Fornecedor:</strong> inativo
@endunless

