<!DOCTYPE html>
<html lang="en" class="wf-roboto-n3-active wf-roboto-n4-active wf-roboto-n5-active wf-active">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="stylesheet" href="{{asset('assets/bootstrap.css')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" media="all">
</head>

<body class="text-center">
<form class="form-signin " action="{{route('usuario.dologin')}}" method="post">
    @csrf
{{--    imagem--}}
    <img class="mb-4" src="{{asset('logo.png')}}" alt="" width="140"
         height="70">
    <h1 class="h3 mb-3 font-weight-normal">Entrar</h1>
    <label for="inputEmail" class="sr-only">Endereço de Email</label>
    <input type="email" name="inputEmail" class="form-control" placeholder="Endereço de Email" required="" autofocus="">
    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" name="inputPassword" class="form-control" placeholder="Senha" required="">

    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted"></p>
</form>


</body>
</html>

