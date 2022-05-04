<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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


<div class="container">
    <h1 class="text-center mt-5">Cadastrar imagens</h1>
    <hr>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10">

            <form class ="mt-5" action = "{{route('imagens.store')}}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class = "row">
                        <div class="col-2">
                            <label for="IMAGEM_BLOG">Imagem:</label>
                        </div>
                        <div class="col-10">
                            <input type="file" accept="image/jpeg" class="form-control" name="IMAGEM_BLOB" accept="image/*">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">

                        <button type="submit" class="btn btn-success mt-3" value="Inserir" name="inserirImagem">Salvar</button>
                        <button type="submit" class="btn btn-danger mt-3" value="Cancelar" name="cancelarImagem">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
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


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
