<?php

namespace App\Repositories\Eloquent;

use App\Entities\Consumer;
use App\Exceptions\Repositories\RepositoryException;
use App\Repositories\Contracts\ConsumerRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;

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
            'user_id' => ['required', 'integer', 'unique:consumers'],
            'username' => ['required', 'string', 'unique:consumers', 'unique:sellers'],
        ]);

        return parent::create($attributes);
    }
}
