@extends('layouts.public',['active'=>'home'])

@php
    $formatter = new NumberFormatter('pt_BR',  NumberFormatter::CURRENCY);
@endphp

@section('content')
  <!-- MAIN -->
  <main>
      <!-- MAIN 1 -->
      {{-- <section class="row main1">
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
      </section> --}}
      <!-- MAIN 2 -->
      <section class="row main2">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-12">
                      <div class="title-page">Serviços</div>
                      {{-- <div class="main-content">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
                      <small>Lorem Ipsum</small> --}}
                      <nav class="list-unstyled">
                          <li><a href="#" data-toggle="modal" data-target="#servicoTexto" data-titulo="Análise de Plano de Manejo Florestal" data-texto="Manejo florestal consiste na exploração de madeira de forma seletiva com base no inventário florestal, a análise do plano tem por objetivo verificar e monitorar os dados da exploração e reportar possíveis inconsistência dos dados para que não afete o volume licenciado, assim como o monitoramento da cobertura florestal. Realizamos também levantamentos, de com uso de ferramentas de geoprocessamento, de áreas potenciais e operacionais para o planejamento de PMFS com análise temporal da cobertura do solo.">Análise de Plano de Manejo Florestal</a></li>
                          <li><a href="#" data-toggle="modal" data-target="#servicoTexto" data-titulo="Revendedor de Drones DJI" data-texto="Dispomos de drones DJI a pronta entrega. Especialmente os modelos da família Mavic, como Mavic Mini SE e Mavic Mini 2. São drones com peso de decolagem abaixo de 250g, duração média de voo de 30 minutos e que possuem gimbal de três eixos. A vantagem desses modelos mais leves, é justamente o tamanho pequeno, que facilita levar até mesmo na mochila. Esse tipo de drone atende a diversos públicos, desde pessoas que trabalham com fotografia e produção de vídeos, a trabalhos de engenharia, construção civil, inspeção de obras, inspeção ambiental, entre outros.">Revendedor de Drones DJI</a></li>
                          <li><a href="#" data-toggle="modal" data-target="#servicoTexto" data-titulo="Laudos Técnicos de Cobertura e Uso da Terra" data-texto="Tais laudos consistem em revisar a classificação da cobertura vegetal de imóveis rurais cadastrados ou não no CAR, podendo ser aplicado em diversas situações, como a análise diacrônica de imagens de satélite a fim de desqualificar um polígono do PRODES, comprovar área consolidada existente antes de 22 de julho de 2008, comprovar o uso recorrente de vegetação em estágio inicial de regeneração, para delimitar áreas passíveis de comunicação de limpeza de capoeira, entre outros. Estes laudos possuem arcabouço teórico, técnico e jurídico.">Laudos Técnicos de Cobertura e Uso da Terra</a></li>
                          <li><a href="#" data-toggle="modal" data-target="#servicoTexto" data-titulo="Regularização Fundiária e Ambiental" data-texto="Os serviços de regularização fundiária do imóvel rural garantem o cumprimento das obrigações cadastrais, jurídicas e tributarias, sendo necessária a inscrição para formalizar as operações de compra e vendas de novas terras, bem como para obtenção de financiamentos rurais, empréstimos, processos ambientais e licenciamentos para atividade rural. O imóvel rural precisa estar regulamentado no Sistema Nacional de Cadastro Rural – SNCR, do Instituto Nacional de Colonização e Reforma Agrária – INCRA para aquisição do certificado indispensável para que possa ser arrendada, vendida, hipotecada ou desmembrada, uma parcela ou toda, propriedade rural. Assim como, estar regulamentado no âmbito tributário, sendo necessário declarar anualmente o Imposto sobre a Propriedade Rural – ITR. Para o imóvel estar regularizado ambientalmente, são necessárias as etapas envolvendo o trabalho de mapear a área, executar o georreferenciamento, fazer a inscrição no Cadastro Ambiental Rural – CAR, e delimitar e avaliar o carecimento de recomposição ou compensação de Reserva Legal, tal como de Áreas de Preservação Permanente, para posteriormente realizar o devido cumprimento no Programa de Regularização Ambiental – PRA. Além disso, é necessário o cumprimento das obrigações estabelecidas no Termo de Compromisso Ambiental firmado junto a Secretaria Estadual de Meio Ambiente, sendo específico para cada imóvel.">Regularização Fundiária e Ambiental</a></li>
                          <li><a href="#" data-toggle="modal" data-target="#servicoTexto" data-titulo="Ativação de CAR e Aprovação de Reserva Legal" data-texto="O Cadastro Ambiental Rural foi criado junto com o Código Florestal com intuito de promover a transparência das propriedades e consequentemente sobre as áreas brasileiras. Adequa-se como planejamento econômico e ambiental para essas propriedades cadastradas, obrigando os proprietários rurais a fazerem a regularização ambiental da propriedade rural. O processo de ativação do CAR é feito com base em estudo multitemporal de imagens de satélites sobre a área do ímovel, para que seja feita a correta classificação da cobertura e uso da terra e delimitação das Áreas Consolidadas, Remanescente de Vegetação Nativa, Área de Proteção Permanente, assim como outras classes. A Reserva Legal é delimitada em áreas de Remanescente de Vegetação Nativa, além de áreas em que o proprietário será obrigado a recompor floresta, como em áreas desmatadas pós 22 de julho de 2008.">Ativação de CAR e Aprovação de Reserva Legal</a></li>
                          <li><a href="#" data-toggle="modal" data-target="#servicoTexto" data-titulo="Desembargos no IBAMA, ICMbio e Secretarias" data-texto="Os desembargos junto aos órgãos fiscalizadores ocorrem por meio de relatório técnico que comprove, a partir de imagens de satélite do imóvel rural, que a área embargada já se encontrava como Área Consolidada antes de 22 de julho de 2008, o marco regulatório do Código Florestal. O imóvel qualificado para o desembargo necessita ter o Recibo de Adesão ao CAR.">Desembargos no IBAMA, ICMbio e Secretarias</a></li>
                          <a href="{{route('servicos')}}" class="arrow">Saiba mais</a>
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
    <!-- Modal -->
    <div class="modal fade" id="servicoTexto" tabindex="-1" role="dialog" aria-labelledby="servicoTextoLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="servicoTextoLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
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
    <script>
        $('#servicoTexto').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var titulo = button.data('titulo') // Extract info from data-* attributes
            var texto = button.data('texto') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text(titulo)
            modal.find('.modal-body').html(texto)
        })
    </script>
@endpush