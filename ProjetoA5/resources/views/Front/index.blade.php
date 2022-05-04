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


    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="{{route('index')}}"><img src="img/logo.png" alt=""></a>
                </div>

                <div class="user-access">
                    <a href="{{route('usuario.login')}}">Login</a>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a class="active" href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('produtos.index')}}">Loja</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('produtos.index')}}">Produtos</a></li>
                                <li><a href="{{route('carrinho.index')}}">Carrinho</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('contact')}}">Contatos</a></li>
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

    <!-- Hero Slider Begin -->
    <section class="hero-slider">
        <div class="hero-items owl-carousel">
            <div class="single-slider-item set-bg" data-setbg="img/slider-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2020</h1>
                            <h2>Fire Violet</h2>
                            <a href="#" class="primary-btn">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/slider-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2020</h1>
                            <h2>Fire Violet</h2>
                            <a href="#" class="primary-btn">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/slider-3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2020</h1>
                            <h2>Fire Violet</h2>
                            <a href="#" class="primary-btn">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Features Section Begin -->
    <section class="features-section spad">
        <div class="features-ads">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features-ads first">
                            <img src="img/icons/f-delivery.png" alt="">
                            <h4>Envio Grátis</h4>
                            <p>Para comprar realizados em São Paulo, Rio de Janeiro e Minas Gerais</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="img/icons/coin.png" alt="">
                            <h4>100% de Devolução </h4>
                            <p>Caso ocorra algum problema com o produto escolhido, o valor será totalmente reembolsado. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads">
                            <img src="img/icons/chat.png" alt="">
                            <h4>Suporte Online 24H</h4>
                            <p>Um suporte com especialista qualificados para te ajudar 24 horas por dia, exceto finais de semana </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Box -->
        <div class="features-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-box-item first-box">
                                    <img src="img/f-box-1.jpg" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2020 Party</span>
                                        <h2>Produtos</h2>
                                        <span class="trend-alert">Novidades Quentes</span>
                                        <a href="#" class="primary-btn">Veja Mais</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-box-item second-box">
                                    <img src="img/f-box-2.jpg" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2021 Tendencias</span>
                                        <h2>Produtos</h2>
                                        <span class="trend-alert">Preto e Branco</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box-item large-box">
                            <img src="img/f-box-3.jpg" alt="">
                            <div class="box-text">
                                <span class="trend-year">2020 Coleções</span>
                                <h2>Produtos</h2>
                                <div class="trend-alert">Mais famosos</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->

    <!-- Lookbok Section Begin -->
    <section class="lookbok-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 offset-lg-1">
                    <div class="lookbok-left">
                        <div class="section-title">
                            <h2>2020<br />#FaçaADiferença</h2>
                        </div>
                        <p>Aquela roupa que você procura encontra-se na nossa loja. Estamos sempre com seu estoque atualizado, oferecendo qualidade pelo menor preço.
                            Na nossa loja, você vai economizar, sem abrir mão da qualidade. Vista-se bem, tenha tudo em tecido e design.
                            Alto astral com o que é bom de fato é conosco</p>
                        <a href="#" class="primary-btn look-btn">Veja Mais</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="lookbok-pic">
                        <img src="img/lookbok.jpg" alt="">
                        <div class="pic-text">fashion</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lookbok Section End -->



    <!-- Footer Section Begin -->
    <footer class="footer-section spad">
        <div class="container">
            <div class="newslatter-form">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#">
                            <input type="text" placeholder="Seu endereço de e-mail">
                            <button type="submit">Se inscreva para Novidades</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Sobre Nós</h4>
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
                                <li>Faça a Diferença</li>
                                <li>Envio e Entregas</li>
                                <li>Galeria</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Nossos Serviços</h4>
                            <ul>
                                <li>Frete Grátis</li>
                                <li>Brindes</li>
                                <li>Nossas Novidades</li>
                                <li>Termos e Condições</li>
                                <li>Póliticas de Privicidade</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Informações</h4>
                            <ul>
                                <li>Metodos de Pagamento</li>
                                <li>Tempo e preços para envio</li>
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
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by Fire Violet
            </p>
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
