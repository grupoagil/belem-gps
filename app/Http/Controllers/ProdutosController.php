<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Repositories\ProdutosRepository;

class ProdutosController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct(
    ProdutosRepository $produtosRepository
  )
  {
    $this->middleware('auth');
    $this->produtosRepository = $produtosRepository;
  }

  /**
   * Lista de produtos
   */
  public function index() 
  {
    $produtos = $this->produtosRepository->all();
	  return view('pages.produtos', compact('produtos'));
	}

  public function cadastrar(Request $request)
  {
    $array = $request->all();
    $array['PROD_VALOR'] = str_replace(['.',','],['','.'],$array['PROD_VALOR']);
    /**
     * Verifica se tem imagem
     */
    if (!$request->hasFile('PROD_IMAGE')) {
      return redirect()->back()->with('falha','Adicione uma imagem');
    }

    /**
     * Salva a imagem
     */
    $this->produtosRepository->create($array);
    return redirect()->back()->with('sucesso','Produto criado com sucesso!');
  }

  public function atualizar(Request $request, $id)
  {
    $produto = $this->produtosRepository->find($id);
    /**
     * Verifica se tem imagem
     */
    $array = $request->except('PROD_IMAGE');
    if ($request->hasFile('PROD_IMAGE')) {
      // Apagar produto 
      Storage::delete($produto->PROD_IMAGE);
      // Salvar novo produto
      $path = $request->file('PROD_IMAGE')->store('public/produtos');
      $array['PROD_IMAGE'] = $path;
    }
    $array['PROD_VALOR'] = str_replace(['.',','],['','.'],$array['PROD_VALOR']);
    $produto->update($array);
    return redirect()->back()->with('sucesso','Produto atualizado com sucesso!');
  }

  public function apagar($id)
  {
    $produto = $this->produtosRepository->find($id);
    Storage::delete($produto->PROD_IMAGE);
    $produto->delete();
    return redirect()->back()->with('sucesso','Produto apagado com sucesso!');
  }

  public function visibilidade($id)
  {
    $produto = $this->produtosRepository->find($id);
    if ($produto->PROD_VISIVEL) {
      $produto->update([
        "PROD_VISIVEL" => false
      ]);
    }else{
      $produto->update([
        "PROD_VISIVEL" => true
      ]);
    }
    return redirect()->back()->with('sucesso','Visibilidade do produto atualizado com sucesso!');
  }
}
