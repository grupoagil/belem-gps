<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProdutosRepository;

class PublicController extends Controller
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
      $this->produtosRepository = $produtosRepository;
    }

    /**
     * Index
     */
    public function index()
    {
        $produtos = $this->produtosRepository->where('PROD_VISIVEL',1)->whereIn('id', [1,8,11,12])->get();
        return view('welcome', compact('produtos'));
    }

    /**
     * Produtos
     */
    public function produtos()
    {
        $produtos = $this->produtosRepository->where('PROD_VISIVEL',1)->get();
        return view('produtos', compact('produtos'));
    }

    /**
     * Quem Somos
     */
    public function quemsomos()
    {
      return view('quemsomos');
    }
    
    /**
     * Serviços
     */
    public function servicos()
    {
      return view('servicos');
    }
}
