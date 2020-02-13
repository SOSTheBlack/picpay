<?php

namespace App\Repositories\Eloquent;

use App\Entities\Transaction;
use App\Repositories\Contracts\TransactionRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TransactionRepositoryEloquent
 *
 * @package App\Repositories\Eloquent
 */
class TransactionRepositoryEloquent extends BaseRepositoryEloquent implements TransactionRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model(): string
    {
        return Transaction::class;
    }

    /**
     * @param array $attributes
     *
     * @return \Illuminate\Database\Eloquent\Model|mixed
     *
     * @throws \App\Exceptions\Repositories\RepositoryException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(array $attributes): Model
    {
        $this->validate(app('request'), [
            'payee_id' => ['required', 'integer', 'exists:sellers,id'],
            'payer_id' => ['required', 'integer', 'exists:consumers,id'],
            'value' => ['required', 'numeric'],
        ]);

        return parent::create($attributes);
    }
}
