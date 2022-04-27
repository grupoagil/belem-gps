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
                          <a href="index.html"><img src="{{asset('bootstrap/assets')}}/img/logo.svg" alt="BELEMGPS" class="img-fluid logo"></a>
                      </div>
                      <div class="col-lg-8 col-md-9 col-sm-8 two text-rigth"> 
                          <nav class="menu-mobile" onclick="toggleMenu()">
                              <div></div>
                              <div></div>
                              <div></div>
                          </nav>
                          <nav class="list-inline row align-items-center justify-content-right" id="toggle" style="justify-content: right;">
                              <li class="list-inline-item active"><a href="">Lorem Ipsum</a></li>
                              <li class="list-inline-item"><a href="">Lorem Ipsum</a></li>
                              <li class="list-inline-item"><a href="">Lorem Ipsum</a></li>
                          </nav>
                      </div>
                  </div>
              </div>
          </section>
          <!-- BANNER -->
          <section class="banner">
              <div class="container">
                  <div class="row align-items-end">
                      <div class="col-lg-7 col-md-12 banner-product">
                          <div class="banner-product-title">Lorem Ipsum</div>
                          <div class="banner-product-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, quibusdam eos tenetur quia facere beatae provident exercitationem ducimus.</div>
                          <button class="banner-product-button">Lorem Ipsum</button>
                      </div>
                  </div>
              </div>
          </section>
      </header>
      <!-- MAIN -->
      <main>
          <!-- MAIN 1 -->
          <section class="row main1">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-4 col-md-12">
                          <div class="title-page">Lorem Ipsum</div>
                          <div class="imagem"><img src="{{asset('bootstrap/assets')}}/img/imagem1.png" alt="" class="img-fluid"></div>
                      </div>
                      <div class="col-1"></div>
                      <div class="col-lg-5 col-md-12">
                          <ol>
                              <li>
                                  Lorem ipsum
                                  <div class="list-content">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
                              </li>
                              <li>
                                  Lorem ipsum
                                  <div class="list-content">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
                              </li>
                              <li>
                                  Lorem ipsum
                                  <div class="list-content">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
                                  <a href="">Lorem Ipsum</a>
                              </li>
                          </ol>
                      </div>
                  </div>
              </div>
          </section>
          <!-- MAIN 2 -->
          <section class="row main2">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-4 col-md-12">
                          <div class="title-page">Serviços</div>
                          <div class="main-content">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
                          <small>Lorem Ipsum</small>
                          <nav class="list-unstyled">
                              <li><a href="">Lorem Ipsum</a></li>
                              <li><a href="">Lorem Ipsum</a></li>
                              {{-- <li><a href="">Lorem Ipsum</a></li>
                              <li><a href="">Lorem Ipsum</a></li>
                              <li><a href="">Lorem Ipsum</a></li>
                              <li><a href="">Lorem Ipsum</a></li> --}}
                              <a href="" class="arrow">Saiba mais</a>
                          </nav>
                      </div>
                      <div class="col-lg-4 col-md-6 row align-items-end">
                          <div class="imagem"><img src="{{asset('bootstrap/assets')}}/img/imagem2.png" alt="" class="img-fluid"></div>
                      </div>
                      <div class="separator"></div>
                      <div class="col-lg-4 col-md-6 row align-items-end">
                          <div class="imagem"><img src="{{asset('bootstrap/assets')}}/img/imagem3.png" alt="" class="img-fluid"></div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- MAIN 3 -->
          <section class="row main3">
              <div class="container">
                  <div class="row justify-content-between align-items-center">
                      <div class="title-page">Produtos</div>
                      <ul class="pagination justify-content-center">
                          <li class="page-item"><a class="page-link" href="#multi-item" data-slide="prev"><</a></li>
                          <li class="page-item"><a class="page-link" href="#multi-item" data-slide="next">></a></li>
                      </ul>
                  </div>
                  <div class="row">
                    <div class="carousel slide" id="multi-item">
                      @for ($i = 0; $i <= 3; $i++)
                      <div class="carousel-item @if($i ==0)active @endif">
                        <div class="row">
                          <div class="col p-4 gps-product">
                              <div class="row justify-content-between align-items-center">
                                  <div class="percent">-17%</div>
                              </div>
                              <div class="row">
                                  <figure class="figure">
                                      <img src="{{asset('bootstrap/assets')}}/img/gps.svg" alt="GPS" class="img-fluid">
                                      <figcaption>Produto</figcaption>
                                  </figure>
                              </div>
                              <div class="row">
                                  <div class="description-gps">Descrição do produto</div>
                              </div>
                              <div class="row">
                                  <div class="price-del-gps">R$180,50</div>
                              </div>
                              <div class="row justify-content-between align-items-center">
                                  <div class="price-gps">R$180,50</div>
                                  <img src="{{asset('bootstrap/assets')}}/img/icons/cart-plus.svg" alt="heart-plus">
                              </div>
                          </div>
                          <div class="col p-4 gps-product">
                              <div class="row justify-content-between align-items-center">
                                  <div class="percent">-17%</div>
                              </div>
                              <div class="row">
                                  <figure class="figure">
                                      <img src="{{asset('bootstrap/assets')}}/img/gps.svg" alt="GPS" class="img-fluid">
                                      <figcaption>Produto</figcaption>
                                  </figure>
                              </div>
                              <div class="row">
                                  <div class="description-gps">Descrição do produto</div>
                              </div>
                              <div class="row">
                                  <div class="price-del-gps">R$180,50</div>
                              </div>
                              <div class="row justify-content-between align-items-center">
                                  <div class="price-gps">R$180,50</div>
                                  <img src="{{asset('bootstrap/assets')}}/img/icons/cart-plus.svg" alt="heart-plus">
                              </div>
                          </div>
                          <div class="col p-4 gps-product">
                              <div class="row justify-content-between align-items-center">
                                  <div class="percent">-17%</div>
                              </div>
                              <div class="row">
                                  <figure class="figure">
                                      <img src="{{asset('bootstrap/assets')}}/img/gps.svg" alt="GPS" class="img-fluid">
                                      <figcaption>Produto</figcaption>
                                  </figure>
                              </div>
                              <div class="row">
                                  <div class="description-gps">Descrição do produto</div>
                              </div>
                              <div class="row">
                                  <div class="price-del-gps">R$180,50</div>
                              </div>
                              <div class="row justify-content-between align-items-center">
                                  <div class="price-gps">R$180,50</div>
                                  <img src="{{asset('bootstrap/assets')}}/img/icons/cart-plus.svg" alt="heart-plus">
                              </div>
                          </div>
                          <div class="col p-4 gps-product">
                              <div class="row justify-content-between align-items-center">
                                  <div class="percent">-17%</div>
                              </div>
                              <div class="row">
                                  <figure class="figure">
                                      <img src="{{asset('bootstrap/assets')}}/img/gps.svg" alt="GPS" class="img-fluid">
                                      <figcaption>Produto</figcaption>
                                  </figure>
                              </div>
                              <div class="row">
                                  <div class="description-gps">Descrição do produto</div>
                              </div>
                              <div class="row">
                                  <div class="price-del-gps">R$180,50</div>
                              </div>
                              <div class="row justify-content-between align-items-center">
                                  <div class="price-gps">R$180,50</div>
                                  <img src="{{asset('bootstrap/assets')}}/img/icons/cart-plus.svg" alt="heart-plus">
                              </div>
                          </div>
                        </div>
                      </div>
                      @endfor
                    </div>
                  </div>
                  <div class="row justify-content-between align-items-center footer-main3">
                      <a href="" class="more-products">mais produtos</a>
                      {{-- <ul class="pagination pagination-gps align-items-center">
                          <a data-target="#multi-item" data-slide-to="0" class="active"><li></li></a>
                          <a data-target="#multi-item" data-slide-to="1"><li></li></a>
                          <a data-target="#multi-item" data-slide-to="2"><li></li></a>
                          <a data-target="#multi-item" data-slide-to="3"><li></li></a>
                          <a data-target="#multi-item" data-slide-to="4"><li></li></a>
                      </ul> --}}
                  </div>
              </div>
          </section>
      </main>
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
    <script src="{{asset('bootstrap/assets')}}/js/script.js"></script>
  </body>
</html>