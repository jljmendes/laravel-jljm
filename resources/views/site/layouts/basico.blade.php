<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>GestCompany - @yield('titulo')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/estilo_personal.css') }}">
</head>

<body>
    @include('site.layouts._partials.topo')
    @yield('conteudo')
</body>

</html>
