<?php

namespace App\Repositories\Eloquent;

use App\Entities\User;
use App\Exceptions\Repositories\RepositoryException;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\Model;

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
            'cpf' => ['required', 'string', 'unique:users'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'full_name' => ['required', 'string'],
            'password' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
        ]);

        $attributes['password'] = $this->generateHash($attributes['password']);

        return parent::create($attributes);
    }
}
