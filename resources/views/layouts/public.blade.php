<!DOCTYPE html>
<html lang="pt">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>BelemGPS</title>
      <link rel="shortcut icon" type="image/png" href="{{asset('bootstrap/assets')}}/img/favicon.png">
      <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/assets')}}/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/assets')}}/css/style.css">
  </head>
  <body>  
    <!-- TOP -->
    <header>
        <!-- TOP 1  -->
        <section class="top-bar1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="row justify-content-center align-items-center top-location">
                        <div class="icon"><img src="{{asset('bootstrap/assets')}}/img/icons/location.svg" alt="location"></div>
                        <div class="top-bar-location-text">Lorem, ipsum...</div>
                    </div>
                    <div class="row justify-content-center align-items-center top-call">
                        <div class="icon"><img src="{{asset('bootstrap/assets')}}/img/icons/call.svg" alt="location"></div>
                        <div class="top-bar-call-text">91 99143-2899</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- TOP 2  -->
        <section class="top-bar2">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-3 col-sm-4 row align-items-center one">
                        <a href="{{route('index')}}"><img src="{{asset('bootstrap/assets')}}/img/logo.svg" alt="BELEMGPS" class="img-fluid logo"></a>
                    </div>
                    <div class="col-lg-8 col-md-9 col-sm-8 two text-rigth"> 
                        <nav class="menu-mobile" onclick="toggleMenu()">
                            <div></div>
                            <div></div>
                            <div></div>
                        </nav>
                        <nav class="list-inline row align-items-center justify-content-right" id="toggle" style="justify-content: right;">
                            <li class="list-inline-item @if(isset($active) && $active == "home") active @endif"><a href="{{route('index')}}">HOME</a></li>
                            <li class="list-inline-item @if(isset($active) && $active == "quemsomos") active @endif"><a href="{{route('quemsomos')}}">QUEM SOMOS</a></li>
                            <li class="list-inline-item @if(isset($active) && $active == "produtos") active @endif"><a href="{{route('produtos')}}">PRODUTOS</a></li>
                            {{-- <li class="list-inline-item"><a href="">HOME</a></li> --}}
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        @if (!isset($page))
            <!-- BANNER -->
            <section class="banner">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-lg-7 col-md-12 banner-product">
                            <div class="banner-product-title" style="margin-bottom: 1rem; text-transform:uppercase;">Quem somos ?</div>
                            <div class="banner-product-content" style="font-size: 1rem; text-align: justify; margin-bottom: 1rem">A Belemgps é uma empresa criada em 2012, especializada no comércio e execução de serviços ligados as áreas de Cartografia, Geoprocessamento, Topografia, Agrimensura, Licenciamento Fundiário e Ambiental. Tem um elenco de experientes profissionais que atuam multidisciplinar mente com vista a soluções rápidas e eficazes, além de ser a maior especialista do Norte do Brasil na comercialização de GPS.</div>
                            <a href="{{route('quemsomos')}}" class="banner-product-button">Nossa equipe!</a>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    </header>
      @yield('content')
    <footer>
        <!-- MAIN4 -->
        {{-- <section class="row main4">
            <div class="container">
                <div class="row flex-column align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <p class="main4-title">Lorem Ipsum</p>
                        <p class="main4-subtitle">Lorem Ipsum</p>
                        <p class="main4-content">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <form action="#" method="POST">
                            <input type="text" name="" id="" placeholder="Lorem Ipsum">
                            <input type="submit" value="Lorem Ipsum">
                        </form>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- FOOTER1 -->
        <section class="row footer1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-10">
                        <div class="footer1-logo">
                            <img src="{{asset('bootstrap/assets')}}/img/logo2.svg" alt="BELEMGPS" class="img-fluid logo">
                        </div>
                        <div class="footer1-tel">91 99143-2899</div>
                        {{-- <a class="footer1-sub">Lorem Ipsum</a>
                        <a class="footer1-sub">Lorem Ipsum</a> --}}
                    </div>
                    {{-- <div class="col-lg-2 col-md-2 col-sm-10">
                        <div class="footer1-title">Компания</div>
                        <a class="footer1-content">О компании</a>
                        <a class="footer1-content">Контакты</a>
                        <a class="footer1-content">Новости</a>
                        <a class="footer1-content">Блог</a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-10">
                        <div class="footer1-title">ПОЛЕЗНАЯ</div>
                        <a class="footer1-content">Акции</a>
                        <a class="footer1-content">Бонусная программа</a>
                        <a class="footer1-content">Корпоративным</a>
                        <a class="footer1-content">Дизайнерам</a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-10">
                        <div class="footer1-title">Покупателю</div>
                        <a class="footer1-content">Доставка и оплата</a>
                        <a class="footer1-content">Гарантия и возврат</a>
                        <a class="footer1-content">Оплата</a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-10">
                        <div class="footer1-title">Социальные сети</div>
                        <a class="footer1-content">Facebook</a>
                        <a class="footer1-content">Instagram</a>
                        <a class="footer1-content">YouTube</a>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- FOOTER2 -->
        <section class="row footer2">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="footer2-copy">
                        <div>Belém GPS © {{date('Y')}}.</div>
                        <div>|</div>
                        <div>Ágil Desenvolvimento.</div>
                    </div>
                    {{-- <div class="footer2-content">
                        <div>Пользовательское соглашение</div>
                        <div>|</div>
                        <div>Политика конфиденциальности</div>
                    </div> --}}
                </div>
            </div>
        </section>
    </footer>
    <script type="text/javascript" src="{{asset('bootstrap/assets')}}/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="{{asset('bootstrap/assets')}}/js/bootstrap.bundle.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('bootstrap/assets')}}/js/script.js"></script>
    @stack('js')
  </body>
</html>