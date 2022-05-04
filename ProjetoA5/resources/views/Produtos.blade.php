<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('product_grid/css/bootstrap.min.css')}}">
    <!-- Style css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('product_grid/css/style.css')}}">
</head>
<body>
<div class="container">
    <h1 class="text-center">Nossa loja</h1>
    <hr>
    <div class="row">
        @foreach ($produtos as $produto)
        <div class="col-md-4 product-grid">
            <div class="image">
                <a href="#">
                    <img src="data:image/jpeg;base64,{{ base64_encode( $produto->getImagem() )}} " class="w-100"/>
                    <div class="overlay">
                        <div class="detail">Ver mais</div>
                    </div>
                </a>
            </div>
            <h5 class="text-center">{{ $produto->NOME }}</h5>
            <h5 class="text-center">R$ {{ $produto->PRECO }}</h5>
            <form action="{{route('carrinho.insert',['produto' => $produto->ID_PRODUTO])}}" method="post">
                @csrf
                <button class="btn buy" role="button">Adicionar ao carrinho</button>
            </form>
        </div>
        @endforeach
    </div>
</div>
</body>
</html>
