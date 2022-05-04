<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Checkout</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Favicons -->

    <meta name="theme-color" content="#563d7c">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container">
    <div class="py-5 text-center">
        <h1>Checkout</h1>
        <hr>
    </div>


        <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Endereço</h4>
            <form action="{{route('pedidos.store')}}" class="needs-validation" novalidate="" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Nome</label>
                        <input type="text" class="form-control" id="firstName" name="NOME" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            O nome é obrigatório.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Sobrenome</label>
                        <input type="text" class="form-control" id="lastName" name="SOBRENOME" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            O sobrenome é obrigatório.
                        </div>
                    </div>
                </div>


                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="EMAIL" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Insira corretamente o seu Email.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Rua</label>
                    <input type="text" class="form-control" id="address" name="LOGRADOURO" placeholder="1234 Main St" required="">
                    <div class="invalid-feedback">
                        O campo logradrouro é obrigatório.
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="country">País</label>
                        <select name="PAIS" class="custom-select d-block w-100" id="country" required="">
                            <option value="">Escolha...</option>
                            <option>Brasil</option>
                        </select>
                        <div class="invalid-feedback">
                            O campo país é obrigatório.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="state">Estado</label>
                        <select name="UF" class="custom-select d-block w-100" id="state" required="">
                            <option value="">Escolha...</option>
                            <option>Acre</option>
                            <option>Alagoas</option>
                            <option>Amapá</option>
                            <option>Amazonas</option>
                            <option>Bahia</option>
                            <option>Ceará</option>
                            <option>Distrito Federal</option>
                            <option>Espírito Santo</option>
                            <option>Goiás</option>
                            <option>Maranhão</option>
                            <option>Mato Grosso</option>
                            <option>Mato Grosso do Sul</option>
                            <option>Minas Gerais</option>
                            <option>Pará</option>
                            <option>Paraíba</option>
                            <option>Paraná</option>
                            <option>Pernambuco</option>
                            <option>Piauí</option>
                            <option>Rio de Janeiro</option>
                            <option>Rio Grande do Norte</option>
                            <option>Rio Grande do Sul</option>
                            <option>Rondônia</option>
                            <option>Roraima</option>
                            <option>Santa Catarina</option>
                            <option>São Paulo</option>
                            <option>Sergipe</option>
                            <option>Tocantins</option>
                        </select>
                        <div class="invalid-feedback">
                            O campo UF é obrigatório.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cidade">Cidade</label>
                        <input type="text" name="CIDADE" class="form-control" id="cidade" placeholder="" required="">
                        <div class="invalid-feedback">
                            O campo cidade é obrigatório.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">CEP</label>
                        <input type="text" name="CEP" class="form-control" id="zip" placeholder="" required="">
                        <div class="invalid-feedback">
                            O campo CEP é obrigatório.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save-info">
                    <label class="custom-control-label" for="save-info">Salvar informações para a próxima compra</label>
                </div>
                <hr class="mb-4">

                <h4 class="mb-3">Pagamento</h4>

                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="METODO_PAGAMENTO" type="radio" value="Cartão de crédito" class="custom-control-input" checked="" required="">
                        <label class="custom-control-label" for="credit">Cartão de crédito</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="METODO_PAGAMENTO" type="radio" value="Cartão de débito" class="custom-control-input" required="">
                        <label class="custom-control-label" for="debit">Cartão de débito</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="paypal" name="METODO_PAGAMENTO" type="radio" value="PayPal" class="custom-control-input" required="">
                        <label class="custom-control-label" for="paypal">PayPal</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-name">Nome escrito no cartão</label>
                        <input type="text" name="NOME_CARTAO" class="form-control" id="cc-name" placeholder="" required="">
                        <small class="text-muted">Nome completo escrito no cartão</small>
                        <div class="invalid-feedback">
                            O campo nome do cartão é obrigatório.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Número do cartão</label>
                        <input type="text" name="NUMERO_CARTAO" class="form-control" id="cc-number" placeholder="" required="">
                        <div class="invalid-feedback">
                            O campo número do cartão é obrigatório.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Data de validade</label>
                        <input type="text" name="DATA_EXPIRACAO" class="form-control" id="cc-expiration" placeholder="" required="">
                        <div class="invalid-feedback">
                            Data de validade é um campo obrigatório.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cc-cvv">CVV</label>
                        <input type="text" name="CVV" class="form-control" id="cc-cvv" placeholder="" required="">
                        <div class="invalid-feedback">
                            Código de segurança é um campo obrigatório.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Efetuar pagamento</button>
            </form>
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2020 Projeto A5</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<script src="form-validation.js"></script>

</body></html>
