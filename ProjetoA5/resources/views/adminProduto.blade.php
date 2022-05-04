<hmtl>
    <head>
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
    <br>

    <div class="container mt-5">
        <h1 class="text-center mt-5">PRODUTOS</h1>
        <hr>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-4 md-5 text-right">
                <a class="btn btn-success mt-5 md-5" href="{{route('produtos.create')}}" role="button">Inserir novo Produto</a>
            </div>

            @if (\Session::has('error'))
                <div class="alert alert-danger mt-3">
                    <ul>
                        <li>{!! \Session::get('error') !!}</li>
                    </ul>
                </div>
            @endif

            <div class="col-md-12 col-sm-4 mt-3">
                <table class="table table-striped table-bordered" style="width:100%">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID Produto</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Preço de Venda</th>
                        <th scope="col">Altura</th>
                        <th scope="col">Largura</th>
                        <th scope="col">Comprimento</th>
                        <th scope="col">ID Imagem</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($produtos as $produto)
                        <tr>
                        <td>{{$produto->ID_PRODUTO}}</td>
                        <td>{{$produto->NOME}}</td>
                        <td>{{$produto->DESCRICAO}}</td>
                        <td>{{$produto->PRECO}}</td>
                        <td>{{$produto->PRECO_VENDA}}</td>
                        <td>{{$produto->ALTURA}}</td>
                        <td>{{$produto->LARGURA}}</td>
                        <td>{{$produto->COMPRIMENTO}}</td>
                        <td>{{$produto->ID_IMAGEM}}</td>
                            <td><a href="{{ route('produtos.edit', ['produto' => $produto->ID_PRODUTO])}}" class="btn btn-success" role="button">Editar</a></td>
                            <form action="{{route('produtos.destroy',['produto' => $produto->ID_PRODUTO])}}" method="post">
                                @csrf
                                @method('delete')
                                <td><button class="btn btn-danger"  role="button">Excluir</button></td>
                            </form>

                    </tr>
                    @endforeach

                    </tbody>
                    <tfoot class="thead-dark">
                    <tr>
                        <th>ID Produto</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Preço de Venda</th>
                        <th>Altura</th>
                        <th>Largura</th>
                        <th>Comprimento</th>
                        <th>ID Imagem</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </tfoot>
                </table>
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
</hmtl>
