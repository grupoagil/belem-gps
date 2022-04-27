@extends('layouts.public')

@section('content')
    
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
                  <a href="{{route('produtos')}}" class="more-products">mais produtos</a>
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
@endsection