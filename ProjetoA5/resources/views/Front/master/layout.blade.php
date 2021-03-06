<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fire Violet</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Search model -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Pesquise.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="inner-header">
            <div class="logo">
                <a href="./index.html"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="header-right">
                <img src="img/icons/search.png" alt="" class="search-trigger">
                <img src="img/icons/man.png" alt="">
                <a href="#">
                    <img src="img/icons/bag.png" alt="">
                    <span>2</span>
                </a>
            </div>
            <div class="user-access">
                <a href="#">Registre-se</a>
                <a href="#" class="in">Login</a>
            </div>
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a class="active" href="./index.html">Home</a></li>
                    <li><a href="./categories.html">Loja</a>
                        <ul class="sub-menu">
                            <li><a href="product-page.html">Produtos</a></li>
                            <li><a href="shopping-cart.html">Carrinho</a></li>
                            <li><a href="check-out.html">Cadastro</a></li>
                        </ul>
                    </li>
                    <li><a href="./contact.html">Contatos</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header Info Begin -->
<div class="header-info">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="header-item">
                    <img src="img/icons/delivery.png" alt="">
                    <p>Descontos de 30% na primeira compra</p>
                </div>
            </div>
            <div class="col-md-4 text-left text-lg-center">
                <div class="header-item">
                    <img src="img/icons/voucher.png" alt="">
                    <p>20% de desconto para estudantes</p>
                </div>
            </div>
            <div class="col-md-4 text-left text-xl-right">
                <div class="header-item">
                    <img src="img/icons/sales.png" alt="">
                    <p>Descontos em compras acima de R$120</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Info End -->
<!-- Header End -->

@yield ('content')

<!-- Footer Section Begin -->
<footer class="footer-section spad">
    <div class="container">
        <div class="newslatter-form">
            <div class="row">
                <div class="col-lg-12">
                    <form action="#">
                        <input type="text" placeholder="Seu endere??o de e-mail">
                        <button type="submit">Se inscreva para Novidades</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-widget">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Sobre N??s</h4>
                        <ul>
                            <li>Sobre</li>
                            <li>Comunidade</li>
                            <li>Trabalhos</li>
                            <li>Envios</li>
                            <li>Contatos</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Clientes</h4>
                        <ul>
                            <li>Pesquise</li>
                            <li>Politicas de Privicidade</li>
                            <li>Fa??a a Diferen??a</li>
                            <li>Envio e Entregas</li>
                            <li>Galeria</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Nossos Servi??os</h4>
                        <ul>
                            <li>Frete Gr??tis</li>
                            <li>Brindes</li>
                            <li>Nossas Novidades</li>
                            <li>Termos e Condi????es</li>
                            <li>P??liticas de Privicidade</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Informa????es</h4>
                        <ul>
                            <li>Metodos de Pagamento</li>
                            <li>Tempo e pre??os para envio</li>
                            <li>Reembolso</li>
                            <li>Metodos de Envio</li>
                            <li>Qualidade de Produtos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-links-warp">
        <div class="container">
            <div class="social-links">
                <a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                <a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
                <a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                <a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
                <a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
                <a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
            </div>
        </div>

        <div class="container text-center pt-5">
            <p>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by Fire Violet </a>
        </div>


    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
