<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
</head>
<body>

<div class="background">


</div>

<section id="conteudo-view" class="login">

    <h1>Login</h1>
    <h3>Cadastro de usuário</h3>

    {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}

    <p>Acesse o Sistema</p>

    <label>
        {!! Form::text('username', null, ['class' => 'input', 'placeholder' => 'usuario']) !!}
    </label>

    <label>
        {!! Form::password('password', ['placeholder' => 'senha']) !!}
    </label>

    {!! Form::submit('Entrar') !!}

    {!! Form::close() !!}


</section>

</body>
</html>
