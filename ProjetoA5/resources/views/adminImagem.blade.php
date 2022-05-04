<html>
<head>
    <title>Imagens</title>
    <!-- Bootstrap css -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
<br>

<div class="container mt-5">
    <h1 class="text-center">Imagens</h1>
    <hr>

    <div class="col-md-12 col-sm-4 md-5 text-right">
        <a class="btn btn-success mt-5 md-5" href="{{route('imagens.create')}}" role="button">Inserir nova imagem</a>
    </div>

    @if (\Session::has('error'))
        <div class="alert alert-danger mt-3">
            <ul>
                <li>{!! \Session::get('error') !!}</li>
            </ul>
        </div>
    @endif

    <div class="row text-center text-lg-left">

        @foreach ($imagens as $imagem)
        <div class="col-lg-3 col-md-4 col-6 mt-2 mb-5">
            <div class="row">
                <a href="#" class="d-block h-100">
                    <img class="img-fluid img-thumbnail" src="data:image/jpeg;base64,{{ base64_encode( $imagem->IMAGEM_BLOB )}} " alt="">
                </a>
            </div>
            <div class ="row justify-content-center">
                <h5 class="card-title text-center">Imagem ID = {{$imagem->ID_IMAGEM}}</h5>
            </div>
            <form action = "{{route('imagens.destroy',['imagen'=>$imagem->ID_IMAGEM])}}" method="post">
                @csrf
                @method('delete')
                <div class="row justify-content-center">
                    <button class="btn btn-danger" role="button">Excluir</button>
                </div>
            </form>

        </div>

        @endforeach
    </div>
</div>

<footer class="page-footer font-small bg-dark">

    <div class="container">

        <div class="row">

            <div class="col-md-12 py-5">
                <div class="mb-5 text-center">

                    <a class="btn" href="#"><i class="fa fa-facebook-square fa-2x text-light" aria-hidden="true"></i></a>
                    <a class="btn" href="#"><i class="fa fa-twitter-square fa-2x text-light" aria-hidden="true"></i></a>
                    <a class="btn" href="#"><i class="fa fa-instagram fa-2x text-light" aria-hidden="true"></i></a>

                </div>
            </div>

        </div>

    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href=""> Projeto A5</a>
    </div>
    <!-- Copyright -->

</footer>


</body>
</html>
