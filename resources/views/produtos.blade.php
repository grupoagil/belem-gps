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
                    <div class="col-3 p-4 gps-product">
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