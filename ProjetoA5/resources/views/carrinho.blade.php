<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1 class="text-center mt-5 md-5">Carrinho de compras</h1>
    <hr>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered text-center">
                <thead>
                <tr>
                    <td>Imagem</td>
                    <td>Nome</td>
                    <td>Valor Unitário</td>
                    <td>Quantidade</td>
                    <td>Valor Total</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                @foreach ($carrinhos as $carrinho)
                <tr>
                    <div class="row">
                        <div class="col-2">
                            <td width="80"><img src="data:image/jpeg;base64,{{ base64_encode( $carrinho->getImagem() )}} "  class="w-100" height="60"/></td>

                                    </div>
                                    <div class="col-2">
                                        <td style="vertical-align: middle;">{{$carrinho->produto()->first()->NOME}}</td>
                                    </div>
                                    <div class="col-2">
                                        <td style="vertical-align: middle;">{{$carrinho->VALOR_UNITARIO}}</td>
                                    </div>
                                    <div class="col-2">
                                        <td style="vertical-align: middle;" width="80" >
                                            <form action="{{route('carrinho.update.quantidade',['carrinho'=>$carrinho->ID_CARRINHO_ITENS])}}" method="post">
                                                <div class="row justify-content-center">

                                                    @csrf
                                                    @method('put')
                                                    <div class="col-2">
                                                        <button class="btn" name="dec" value ="dec" role="button">-</button>
                                                    </div>
                                                    <div class="col-4">
                                                        <input id="InpQuant" style="width:50px;" type="number" min="0" readonly value="{{$carrinho->QUANTIDADE}}">
                                                    </div>
                                                    <div class="col-2">
                                                        <button class="btn" name="inc" value="inc" role="button">+</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </td>
                                        <div class="col-2">
                                            <td style="vertical-align: middle;">{{$carrinho->VALOR_TOTAL}}</td>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <td style="vertical-align: middle;">
                                            <form action="{{route('carrinho.destroy',['carrinho'=>$carrinho])}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger"  role="button">Excluir</button>
                                            </form>
                                        </td>
                                    </div>
                                </div>
                            </tr>
                @endforeach


                </tbody>

            </table>
        </div>
        <div class="col-md-12 text-right">
            <div class="pull-right">
                <a href="{{route('produtos.index')}}" class="btn">Voltar a loja</a>
                <a href="@if($carrinhos->first()) {{route('pedidos.checkout')}} @endif" class="btn btn-success">Checkout</a>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
