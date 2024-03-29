<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
<title>Cadastro de Funcionário</title>
<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
@yield('css-view')
</head>

<body>

    @include('templates.menu-lateral')

    <section id="view-conteudo">
        @yield('conteudo-view')
    </section>

    @yield('js-view')

</body>

</html>
