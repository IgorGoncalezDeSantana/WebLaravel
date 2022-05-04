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
                        <a class="nav-link" href="" >Pedidos </a>
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
        <h1 class="text-center mt-5">PEDIDOS</h1>
        <hr>
    </div>



    <div class="container">
        <div class="row">

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
                        <th scope="col">ID Pedido</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Email</th>
                        <th scope="col">País</th>
                        <th scope="col">Logradouro</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">UF</th>
                        <th scope="col">CEP</th>
                        <th scope="col">Método de pagamento</th>
                        <th scope="col">Valor total</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($pedidos as $pedido)
                            <tr  data-toggle="collapse" data-target="#accordion{{$pedido->ID_PEDIDO}}" class="clickable">
                                <td>{{$pedido->ID_PEDIDO}}</td>
                                <td>{{$pedido->NOME}}</td>
                                <td>{{$pedido->SOBRENOME}}</td>
                                <td>{{$pedido->EMAIL}}</td>
                                <td>{{$pedido->PAIS}}</td>
                                <td>{{$pedido->LOGRADOURO}}</td>
                                <td>{{$pedido->CIDADE}}</td>
                                <td>{{$pedido->UF}}</td>
                                <td>{{$pedido->CEP}}</td>
                                <td>{{$pedido->METODO_PAGAMENTO}}</td>
                                <td>R$ {{$pedido->VALOR_TOTAL}}</td>
                            </tr>
                            <tr>
                                <td colspan="10">
                                    <div id="accordion{{$pedido->ID_PEDIDO}}" class="collapse">
                                        <h5>Itens</h5>
                                            <table class="table table-striped table-bordered" style="width:100%">
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">ID Pedido Item</th>
                                                    <th scope="col">ID Produto</th>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Valor Unitário</th>
                                                    <th scope="col">Quantidade</th>
                                                    <th scope="col">Valor total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($pedido->pedidos_itens()->get() as $item)
                                                    <tr>
                                                        <td>{{$item->ID_PEDIDO_ITEM}}</td>
                                                        <td>{{$item->ID_PRODUTO}}</td>
                                                        <td>{{$item->produto()->first()->NOME}}</td>
                                                        <td>{{$item->VALOR_UNITARIO}}</td>
                                                        <td>{{$item->QUANTIDADE}}</td>
                                                        <td>{{$item->VALOR_TOTAL}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                                <tfoot class="thead-dark">
                                                <tr>
                                                    <th scope="col">ID Pedido Item</th>
                                                    <th scope="col">ID Produto</th>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Valor Unitário</th>
                                                    <th scope="col">Quantidade</th>
                                                    <th scope="col">Valor total</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot class="thead-dark">
                    <tr>
                        <th scope="col">ID Pedido</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Email</th>
                        <th scope="col">País</th>
                        <th scope="col">Logradouro</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">UF</th>
                        <th scope="col">CEP</th>
                        <th scope="col">Método de pagamento</th>
                        <th scope="col">Valor total</th>
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
