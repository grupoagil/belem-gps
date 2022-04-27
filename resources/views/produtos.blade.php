@extends('layouts.public' , ["page"=>true])

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
                @for ($i = 1; $i <= 10; $i++)
                    <div class="col-3 p-4 gps-product">
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
                @endfor
            </div>
        </div>
    </section>
</main>
@endsection