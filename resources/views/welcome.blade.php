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
                        @if ($produtos->count()>0)
                            @foreach (array_chunk($produtos->toArray(),4)[0] as $item)
                                <div class="col-12 col-md-3 p-4 gps-product">
                                    <div class="row justify-content-between align-items-center">
                                        @if ($item['PROD_DESCONTO_CIELO'] != 0)
                                            <div class="percent">-{{$item['PROD_DESCONTO_CIELO']}}%</div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <figure class="figure">
                                            <img src="{{asset(str_replace('public','storage',$item['PROD_IMAGE']))}}" alt="GPS" class="img-fluid">
                                            <figcaption>{{$item['PROD_NOME']}}</figcaption>
                                        </figure>
                                    </div>
                                    <div class="row" style="margin-bottom: 5rem;">
                                        <div class="description-gps">{{substr($item['PROD_DESCRICAO'],0, 100)}}</div>
                                    </div>
                                    @if ($item['PROD_DESCONTO_CIELO'] != 0)
                                    <div class="row">
                                        <div class="price-del-gps">{{$formatter->formatCurrency($item['PROD_VALOR'], "BRL")}}</div>
                                    </div>
                                    @endif
                                    <div class="row justify-content-between align-items-center" style="bottom: 1rem;position: absolute;width: 100%;">
                                        @if ($item['PROD_DESCONTO_CIELO'] != 0)
                                            <div class="price-gps">{{$formatter->formatCurrency($item['PROD_VALOR'] - ($item['PROD_VALOR'] / 100 * $item['PROD_DESCONTO_CIELO']), "BRL")}}</div>
                                        @else
                                            <div class="price-gps">{{$formatter->formatCurrency($item['PROD_VALOR'], "BRL")}}</div>
                                        @endif
                                        <button class="btn btn-secundary carrinho"
                                        style="right: 1px; margin-right: 1rem;"
                                        data-cielo="{{$item['PROD_LINK_CIELO']}}"
                                        data-magalu="{{$item['PROD_LINK_MAGALU']}}"
                                        data-descricao="{{$item['PROD_DESCRICAO']}}"
                                        data-desconto="{{$item['PROD_DESCONTO_CIELO']}}"
                                        data-imagem="{{asset(str_replace('public','storage',$item['PROD_IMAGE']))}}"
                                        data-titulo="{{$item['PROD_NOME']}}"
                                        data-toggle="modal" data-target="#produtoPreview"><img src="{{asset('bootstrap/assets')}}/img/icons/cart-plus.svg" alt="heart-plus"> Comprar</button>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                @if ($produtos->count() > 4)
                    <div class="carousel-item">
                        <div class="row">
                            @foreach (array_chunk($produtos->toArray(),4)[1] as $item)
                            <div class="col-12 col-md-3 p-4 gps-product">
                                    <div class="row justify-content-between align-items-center">
                                        @if ($item['PROD_DESCONTO_CIELO'] != 0)
                                            <div class="percent">-{{$item['PROD_DESCONTO_CIELO']}}%</div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <figure class="figure">
                                            <img src="{{asset(str_replace('public','storage',$item['PROD_IMAGE']))}}" alt="GPS" class="img-fluid">
                                            <figcaption>{{$item['PROD_NOME']}}</figcaption>
                                        </figure>
                                    </div>
                                    <div class="row" style="margin-bottom: 5rem;">
                                        <div class="description-gps">{{substr($item['PROD_DESCRICAO'],0, 100)}}</div>
                                    </div>
                                    @if ($item['PROD_DESCONTO_CIELO'] != 0)
                                    <div class="row">
                                        <div class="price-del-gps">{{$formatter->formatCurrency($item['PROD_VALOR'], "BRL")}}</div>
                                    </div>
                                    @endif
                                    <div class="row justify-content-between align-items-center" style="bottom: 1rem;position: absolute;width: 100%;">
                                        @if ($item['PROD_DESCONTO_CIELO'] != 0)
                                            <div class="price-gps">{{$formatter->formatCurrency($item['PROD_VALOR'] - ($item['PROD_VALOR'] / 100 * $item['PROD_DESCONTO_CIELO']), "BRL")}}</div>
                                        @else
                                            <div class="price-gps">{{$formatter->formatCurrency($item['PROD_VALOR'], "BRL")}}</div>
                                        @endif
                                        <button class="btn btn-secundary carrinho"
                                            style="right: 1px; margin-right: 1rem;"
                                            data-cielo="{{$item['PROD_LINK_CIELO']}}"
                                            data-magalu="{{$item['PROD_LINK_MAGALU']}}"
                                            data-descricao="{{$item['PROD_DESCRICAO']}}"
                                            data-desconto="{{$item['PROD_DESCONTO_CIELO']}}"
                                            data-imagem="{{asset(str_replace('public','storage',$item['PROD_IMAGE']))}}"
                                            data-titulo="{{$item['PROD_NOME']}}"
                                            data-toggle="modal" data-target="#produtoPreview"><img src="{{asset('bootstrap/assets')}}/img/icons/cart-plus.svg" alt="heart-plus"> Comprar</button>
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
  <!-- Modal Preview Produto -->
    <div class="modal fade" id="produtoPreview" tabindex="-1" role="dialog" aria-labelledby="produtoPreviewLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="produtoPreviewLabel">Preview Produto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <img src="" alt="Imagem do Produto" width="100%">
                    </div>
                    <div class="col-6">
                        <div class="" id="descricao" style="text-align: justify">

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <a href="#" target="_blank" class="btn btn-primary">Comprar pela Cielo</a>
                <a href="#" target="_blank" class="btn btn-danger">Comprar pela Magalu</a>
            </div>
        </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $('#produtoPreview').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var imagem = button.data('imagem') // Extract info from data-* attributes
            var titulo = button.data('titulo')
            var descricao = button.data('descricao')
            var cielo = button.data('cielo')
            var magalu = button.data('magalu')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text(titulo)
            modal.find('img').attr('src',imagem)
            modal.find('#descricao').text(descricao);
            modal.find('.btn-primary').attr('href',cielo)
            modal.find('.btn-danger').attr('href',magalu)
        })
    </script>
@endpush