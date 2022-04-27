@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

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
                  <button class="btn btn-info">Adicionar</button>
                </div>
              </div>
              <table class="table">
                <thead class="text-info">
                  <th>#</th>
                  <th>Título</th>
                  <th>Descrição</th>
                  <th>Preço</th>
                  <th>Desconto</th>
                  <th class="text-right">Opções</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Produto Teste</td>
                    <td>O produto teste Teste</td>
                    <td>R$ 1.000,00</td>
                    <td>10%</td>
                    <td class="text-right">
                      <div class="dropdown">
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Opções
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection