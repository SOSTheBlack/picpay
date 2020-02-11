<?php

namespace App\Repositories\Eloquent;

use App\User;

/**
 * Class UserRepository
 *
 * @package App\Repositories\Eloquent
 */
class UserRepositoryEloquent extends BaseRepositoryEloquent
{
    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model(): string
    {
        return User::class;
    }
}
