<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de usuários</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
    <div class="container ">
        <a class="navbar-brand h1 mb-0" href="#">Projeto A5</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSite">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('produtos.admin')}}" >Produtos </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('imagens.index')}}" >Imagens </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('pedidos.index')}}" >Pedidos </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('usuarios.todos')}}" >Usuários </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('usuario.logout')}}" >Logout </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="col-md-12 col-sm-4 mt-3">
    <table class="table table-striped table-bordered" style="width:100%">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Ações</th>
            <th scope="col">Ações</th>

        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
        <tr>
        <td>{{$usuario-> id}}</td>
        <td>{{$usuario-> name}}</td>
        <td>{{$usuario->email}}</td>
        <td><a href="{{ route('usuarios.formaddusuario', ['usuario' => $usuario->id])}}" class="btn btn-success" role="button">Editar</a></td>
        <form action="{{route('usuario.destroy',['usuario'=>$usuario->id])}}}" method="post">
        @csrf
        @method('delete')
        <input type="hidden" name="usuario" value="{{$usuario->id}}">
        <td><input type="submit" value="Remover" class="btn btn-danger"></td>
        </form>
        </tr>
    @endforeach
    </tbody>
    </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
