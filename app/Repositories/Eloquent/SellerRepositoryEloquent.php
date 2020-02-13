<?php

namespace App\Repositories\Eloquent;

use App\Entities\Seller;
use App\Exceptions\Repositories\RepositoryException;
use App\Repositories\Contracts\ConsumerRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;

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

    /**
     * Save a new entity in repository
     *
     * @param array $attributes
     *
     * @return mixed
     *
     * @throws RepositoryException
     * @throws ValidationException
     */
    public function create(array $attributes): Model
    {
        $this->validate(app('request'), [
            'user_id' => ['required', 'integer', 'unique:sellers', 'exists:users,id'],
            'username' => ['required', 'string', 'unique:sellers', 'unique:consumers'],
            'cnpj' => ['required', 'string', 'unique:sellers'],
            'fantasy_name' => ['required', 'string'],
            'social_name' => ['required', 'string'],
        ]);

        return parent::create($attributes);
    }
}
