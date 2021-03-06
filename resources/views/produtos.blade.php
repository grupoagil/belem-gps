@extends('layouts.public' , ["page"=>true, 'active'=>'produtos'])

@php
    $formatter = new NumberFormatter('pt_BR',  NumberFormatter::CURRENCY);
@endphp

@section('content')
<!-- MAIN -->
<main>
    <!-- MAIN 3 -->
    <section class="row main3">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="title-page">Produtos</div>
            </div>
            <div class="row">
                @foreach ($produtos->toArray() as $item)
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