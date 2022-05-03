@extends('layouts.public',['active'=>'home'])

@php
    $formatter = new NumberFormatter('pt_BR',  NumberFormatter::CURRENCY);
@endphp

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
                @php
                @endphp
                <div class="carousel-item active">
                    <div class="row">
                        @foreach (array_chunk($produtos->toArray(),4)[0] as $item)
                            <div class="col p-4 gps-product">
                                <div class="row justify-content-between align-items-center">
                                    @if ($item['PROD_DESCONTO_CIELO'] != 0)
                                        <div class="percent">-{{$item['PROD_DESCONTO_CIELO']}}%</div>
                                    @endif
                                </div>
                                <div class="row">
                                    <figure class="figure">
                                        <img src="{{asset('bootstrap/assets')}}/img/gps.svg" alt="GPS" class="img-fluid">
                                        <figcaption>{{$item['PROD_NOME']}}</figcaption>
                                    </figure>
                                </div>
                                <div class="row">
                                    <div class="description-gps">{{$item['PROD_DESCRICAO']}}</div>
                                </div>
                                @if ($item['PROD_DESCONTO_CIELO'] != 0)
                                <div class="row">
                                    <div class="price-del-gps">{{$formatter->formatCurrency($item['PROD_VALOR'], "BRL")}}</div>
                                </div>
                                @endif
                                <div class="row justify-content-between align-items-center">
                                    @if ($item['PROD_DESCONTO_CIELO'] != 0)
                                        <div class="price-gps">{{$formatter->formatCurrency($item['PROD_VALOR'] - ($item['PROD_VALOR'] / 100 * $item['PROD_DESCONTO_CIELO']), "BRL")}}</div>
                                    @else
                                        <div class="price-gps">{{$formatter->formatCurrency($item['PROD_VALOR'], "BRL")}}</div>
                                    @endif
                                    <button class="btn btn-secundary carrinho" data-cielo="{{$item['PROD_LINK_CIELO']}}" data-magalu="{{$item['PROD_LINK_MAGALU']}}" data-desconto="{{$item['PROD_DESCONTO_CIELO']}}"><img src="{{asset('bootstrap/assets')}}/img/icons/cart-plus.svg" alt="heart-plus"></button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @if ($produtos->count() > 4)
                    <div class="carousel-item">
                        <div class="row">
                            @foreach (array_chunk($produtos->toArray(),4)[1] as $item)
                            <div class="col p-4 gps-product">
                                <div class="row justify-content-between align-items-center">
                                    @if ($item['PROD_DESCONTO_CIELO'] != 0)
                                        <div class="percent">-{{$item['PROD_DESCONTO_CIELO']}}%</div>
                                    @endif
                                </div>
                                <div class="row">
                                    <figure class="figure">
                                        <img src="{{asset('bootstrap/assets')}}/img/gps.svg" alt="GPS" class="img-fluid">
                                        <figcaption>{{$item['PROD_NOME']}}</figcaption>
                                    </figure>
                                </div>
                                <div class="row">
                                    <div class="description-gps">{{$item['PROD_DESCRICAO']}}</div>
                                </div>
                                @if ($item['PROD_DESCONTO_CIELO'] != 0)
                                <div class="row">
                                    <div class="price-del-gps">{{$formatter->formatCurrency($item['PROD_VALOR'], "BRL")}}</div>
                                </div>
                                @endif
                                <div class="row justify-content-between align-items-center">
                                    @if ($item['PROD_DESCONTO_CIELO'] != 0)
                                        <div class="price-gps">{{$formatter->formatCurrency($item['PROD_VALOR'] - ($item['PROD_VALOR'] / 100 * $item['PROD_DESCONTO_CIELO']), "BRL")}}</div>
                                    @else
                                        <div class="price-gps">{{$formatter->formatCurrency($item['PROD_VALOR'], "BRL")}}</div>
                                    @endif
                                    <button class="btn btn-secundary carrinho" data-cielo="{{$item['PROD_LINK_CIELO']}}" data-magalu="{{$item['PROD_LINK_MAGALU']}}" data-desconto="{{$item['PROD_DESCONTO_CIELO']}}"><img src="{{asset('bootstrap/assets')}}/img/icons/cart-plus.svg" alt="heart-plus"></button>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                @endif
                </div>
              </div>
              <div class="row justify-content-between align-items-center footer-main3">
                  <a href="{{route('produtos')}}" class="more-products">mais produtos</a>
              </div>
          </div>
      </section>
  </main>
@endsection

@push('js')
    <script>
        $('.carrinho').click((event)=>{
            var button = $(event.currentTarget);
            var desconto = button.data('desconto');
            var cielo = button.data('cielo');
            var magalu = button.data('magalu');
            Swal.fire({
                title: 'Escolha onde comprar',
                showCancelButton: true,
                confirmButtonText: (desconto != 0)?'Cielo (-'+desconto+'% Desconto)':'Cielo',
                cancelButtonText: (desconto != 0)?'Magalu (Sem Desconto)':'Magalu',
            }).then((result) => {
                if (result.value) {
                    window.location.href = cielo;
                } else {
                    window.location.href = magalu;
                }
            })
        })
    </script>
@endpush