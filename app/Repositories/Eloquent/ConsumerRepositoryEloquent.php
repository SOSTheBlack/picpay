<?php

namespace App\Repositories\Eloquent;

use App\Entities\Consumer;
use App\Repositories\Contracts\ConsumerRepository;

/**
 * Class ConsumerRepositoryEloquent.
 *
 * @package App\Repositories\Eloquent
 */
class ConsumerRepositoryEloquent extends BaseRepositoryEloquent implements ConsumerRepository
{
    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model(): string
    {
        return Consumer::class;
    }
}
