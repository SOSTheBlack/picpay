<?php

namespace App\Repositories\Eloquent;

use App\Entities\Seller;
use App\Repositories\Contracts\ConsumerRepository;

/**
 * Class ConsumerRepositoryEloquent.
 *
 * @package App\Repositories\Eloquent
 */
class SellerRepositoryEloquent extends BaseRepositoryEloquent implements ConsumerRepository
{
    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model(): string
    {
        return Seller::class;
    }
}
