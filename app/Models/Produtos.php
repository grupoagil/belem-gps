<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Produtos.
 *
 * @package namespace App\Models;
 */
class Produtos extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'PROD_NOME',
        'PROD_DESCRICAO',
        'PROD_IMAGE',
        'PROD_VALOR',
        'PROD_DESCONTO_CIELO',
        'PROD_LINK_CIELO',
        'PROD_LINK_MAGALU',
        'PROD_VISIVEL'
    ];

}
