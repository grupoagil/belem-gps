@extends('layouts.public' , ["page"=>true, 'active'=>'servicos'])

@section('content')
<!-- MAIN -->
<main>
  <!-- MAIN 3 -->
  <section class="row main3">
      <div class="container">
          <div class="row justify-content-between align-items-center">
              <div class="title-page">Serviços</div>
          </div>
          <div class="row">
            <div class="col-8" style="margin-inline: auto;">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  @for ($i = 1; $i <= 8; $i++)
                    <div class="carousel-item @if($i == 1) active @endif">
                      <img class="d-block w-100" src="{{asset('belemgps')}}/foto{{$i}}.jpeg" alt="Fotos de Serviços" style="height: 50%">
                    </div>
                  @endfor
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="col-12 mt-5 pt-5">
              <h3>Análise de Plano de Manejo Florestal</h3>
              <p style="text-align: justify;margin-top:2rem;">
                Manejo florestal consiste na exploração de madeira de forma seletiva com base no inventário florestal, a análise do plano tem por objetivo verificar e monitorar os dados da exploração e reportar possíveis inconsistência dos dados para que não afete o volume licenciado, assim como o monitoramento da cobertura florestal. Realizamos também levantamentos, de com uso de ferramentas de geoprocessamento, de áreas potenciais e operacionais para o planejamento de PMFS com análise temporal da cobertura do solo. 
              </p>
              <hr />
              <h3>Revendedor de Drones DJI</h3>
              <p style="text-align: justify;margin-top:2rem;">
                Dispomos de drones DJI a pronta entrega. Especialmente os modelos da família Mavic, como Mavic Mini SE e Mavic Mini 2. São drones com peso de decolagem abaixo de 250g, duração média de voo de 30 minutos e que possuem gimbal de três eixos. A vantagem desses modelos mais leves, é justamente o tamanho pequeno, que facilita levar até mesmo na mochila. Esse tipo de drone atende a diversos públicos, desde pessoas que trabalham com fotografia e produção de vídeos, a trabalhos de engenharia, construção civil, inspeção de obras, inspeção ambiental, entre outros.
              </p>
              <hr />
              <h3>Laudos Técnicos de Cobertura e Uso da Terra</h3>
              <p style="text-align: justify;margin-top:2rem;">
                Tais laudos consistem em revisar a classificação da cobertura vegetal de imóveis rurais cadastrados ou não no CAR, podendo ser aplicado em diversas situações, como a análise diacrônica de imagens de satélite a fim de desqualificar um polígono do PRODES, comprovar área consolidada existente antes de 22 de julho de 2008, comprovar o uso recorrente de vegetação em estágio inicial de regeneração, para delimitar áreas passíveis de comunicação de limpeza de capoeira, entre outros. Estes laudos possuem arcabouço teórico, técnico e jurídico. 
              </p>
              <hr />
              <h3>Regularização Fundiária e Ambiental</h3>
              <p style="text-align: justify;margin-top:2rem;">
                Os serviços de regularização fundiária do imóvel rural garantem o cumprimento das obrigações cadastrais, jurídicas e tributarias, sendo necessária a inscrição para formalizar as operações de compra e vendas de novas terras, bem como para obtenção de financiamentos rurais, empréstimos, processos ambientais e licenciamentos para atividade rural. O imóvel rural precisa estar regulamentado no Sistema Nacional de Cadastro Rural – SNCR, do Instituto Nacional de Colonização e Reforma Agrária – INCRA para aquisição do certificado indispensável para que possa ser arrendada, vendida, hipotecada ou desmembrada, uma parcela ou toda, propriedade rural. Assim como, estar regulamentado no âmbito tributário, sendo necessário declarar anualmente o Imposto sobre a Propriedade Rural – ITR. Para o imóvel estar regularizado ambientalmente, são necessárias as etapas envolvendo o trabalho de mapear a área, executar o georreferenciamento, fazer a inscrição no Cadastro Ambiental Rural – CAR, e delimitar e avaliar o carecimento de recomposição ou compensação de Reserva Legal, tal como de Áreas de Preservação Permanente, para posteriormente realizar o devido cumprimento no Programa de Regularização Ambiental – PRA. Além disso, é necessário o cumprimento das obrigações estabelecidas no Termo de Compromisso Ambiental firmado junto a Secretaria Estadual de Meio Ambiente, sendo específico para cada imóvel.
              </p>
              <hr />
              <h3>Ativação de CAR e Aprovação de Reserva Legal</h3>
              <p style="text-align: justify;margin-top:2rem;">
                O Cadastro Ambiental Rural foi criado junto com o Código Florestal com intuito de promover a transparência das propriedades e consequentemente sobre as áreas brasileiras. Adequa-se como planejamento econômico e ambiental para essas propriedades cadastradas, obrigando os proprietários rurais a fazerem a regularização ambiental da propriedade rural. O processo de ativação do CAR é feito com base em estudo multitemporal de imagens de satélites sobre a área do ímovel, para que seja feita a correta classificação da cobertura e uso da terra e delimitação das Áreas Consolidadas, Remanescente de Vegetação Nativa, Área de Proteção Permanente, assim como outras classes. A Reserva Legal é delimitada em áreas de Remanescente de Vegetação Nativa, além de áreas em que o proprietário será obrigado a recompor floresta, como em áreas desmatadas pós 22 de julho de 2008.
              </p>
              <hr />
              <h3>Desembargos no IBAMA, ICMbio e Secretarias</h3>
              <p style="text-align: justify;margin-top:2rem;">
                Os desembargos junto aos órgãos fiscalizadores ocorrem por meio de relatório técnico que comprove, a partir de imagens de satélite do imóvel rural, que a área embargada já se encontrava como Área Consolidada antes de 22 de julho de 2008, o marco regulatório do Código Florestal. O imóvel qualificado para o desembargo necessita ter o Recibo de Adesão ao CAR.
              </p>
            </div>
          </div>
      </div>
  </section>
</main>
@endsection