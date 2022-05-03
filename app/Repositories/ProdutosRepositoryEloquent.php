<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ProdutosRepository;
use App\Models\Produtos;
use App\Validators\ProdutosValidator;

/**
 * Class ProdutosRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ProdutosRepositoryEloquent extends BaseRepository implements ProdutosRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Produtos::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
