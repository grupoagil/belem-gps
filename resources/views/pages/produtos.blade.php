@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@push('css')
<style type="text/css">
  #image-preview {
    width: 400px;
    height: 400px;
    position: relative;
    overflow: hidden;
    background-color: #ffffff;
    color: #ecf0f1;
  }
  #image-preview input {
    line-height: 200px;
    font-size: 200px;
    position: absolute;
    opacity: 0;
    z-index: 10;
  }
  #image-preview label {
    position: absolute;
    z-index: 5;
    opacity: 0.8;
    cursor: pointer;
    background-color: #bdc3c7;
    color: white;
    width: 200px;
    height: 50px;
    font-size: 20px;
    line-height: 50px;
    text-transform: uppercase;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    text-align: center;
  }
  </style>
@endpush

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Lista de Produtos</h4>
            <p class="card-category">Produtos Visíveis no Site</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <div class="row">
                <div class="col-12 text-right">
                  <button class="btn btn-info" data-toggle="modal" data-target="#modalProdutos" data-isCreate="1">Adicionar</button>
                </div>
              </div>
              <table class="table">
                <thead class="text-info">
                  <th>#</th>
                  <th>Nome</th>
                  <th>Descrição</th>
                  <th>Preço</th>
                  <th>Desconto</th>
                  <th class="text-right">Opções</th>
                </thead>
                <tbody>
                  @foreach ($produtos as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->PROD_NOME}}</td>
                      <td>{{$item->PROD_DESCRICAO}}</td>
                      <td>{{$item->PROD_VALOR}}</td>
                      <td>{{$item->PROD_DESCONTO_CIELO}}</td>
                      <td class="text-right">
                        <div class="dropdown">
                          <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalProdutos" data-isCreate="0" data-json="{{json_encode($item)}}">Editar</a>
                            <a class="dropdown-item" href="#">Apagar</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalProdutos" tabindex="-1" role="dialog" aria-labelledby="modalProdutosLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalProdutosLabel">Editar/Cadastar Produtos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="#" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label>Nome do Produto</label>
                    <input type="text" class="form-control" name="PROD_NOME">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label>Descrição do Produto</label>
                    <textarea class="form-control" rows="3" name="PROD_DESCRICAO"></textarea>
                  </div>
                </div>
                <div class="col-12">
                  <label>Imagem do Produto</label>
                  <div class="form-group" style="text-align: -webkit-center;">
                    <div id="image-preview">
                      <label for="image-upload" id="image-label">Selecionar</label>
                      <input type="file" name="PROD_IMAGE" id="image-upload" />
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label>Valor do Produto</label>
                    <input type="text" class="form-control money" name="PROD_VALOR">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label>Desconto do Produto</label>
                    <input type="number" class="form-control" name="PROD_DESCONTO_CIELO">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label>Link Cielo</label>
                    <input type="text" class="form-control" name="PROD_LINK_CIELO">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label>Link Magalu</label>
                    <input type="text" class="form-control" name="PROD_LINK_MAGALU">
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-info">Salvar</button>
          </div>
      </form>
    </div>
  </div>
</div>
@endsection

@push('js')
    <script src="{{ asset('material') }}/js/jquery.mask.js"></script>
    <script src="{{ asset('material') }}/js/jquery.uploadPreview.min.js"></script>
    <script>
      $('.money').mask('000.000.000.000.000,00', {reverse: true});
      $('#modalProdutos').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var isCreate = button.data('iscreate') // Extract info from data-* attributes
        var json = button.data('json') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        if (isCreate == 1) {
          modal.find('form').attr('action',"{{route('admin.produtos.cadastrar')}}")
        }else{
          modal.find('form').attr('action',"{{route('admin.produtos.atualizar','#')}}".replace('#',json.id))
          modal.find('input[name="PROD_NOME"]').val(json.PROD_NOME)
          modal.find('textarea[name="PROD_DESCRICAO"]').val(json.PROD_DESCRICAO)
          modal.find('input[name="PROD_VALOR"]').val($('.money').masked((isInt(json.PROD_VALOR))?json.PROD_VALOR.toFixed(2):json.PROD_VALOR))
          modal.find('input[name="PROD_DESCONTO_CIELO"]').val(json.PROD_DESCONTO_CIELO)
          modal.find('input[name="PROD_LINK_CIELO"]').val(json.PROD_LINK_CIELO)
          modal.find('input[name="PROD_LINK_MAGALU"]').val(json.PROD_LINK_MAGALU)
          $('#image-preview').css('background-image','url({{asset("storage/")}}'+json.PROD_IMAGE.replace('public','')+')')
          $('#image-preview').css('background-size','cover');
          $('#image-preview').css('background-position','center center');
        }
      })
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $.uploadPreview({
          input_field: "#image-upload",
          preview_box: "#image-preview",
          label_field: "#image-label"
        });
      });
      function isInt(n) {
        return n % 1 === 0;
      }
    </script>
@endpush