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
        $produtos = $this->produtosRepository->limit(8);
        return view('welcome', compact('produtos'));
    }

    /**
     * Produtos
     */
    public function produtos()
    {
        $produtos = $this->produtosRepository->all();
        return view('produtos', compact('produtos'));
    }
}
