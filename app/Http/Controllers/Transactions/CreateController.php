<?php

namespace App\Http\Controllers\Transactions;

use App\Exceptions\Repositories\RepositoryException;
use App\Http\Resources\TransactionResource;
use Carbon\Carbon;

/**
 * Class CreateController
 *
 * @package App\Http\Controllers\Transactions
 */
class CreateController extends TransactionController
{
    /**
     * @return TransactionResource.
     *
     * @throws RepositoryException
     */
    public function __invoke(): TransactionResource
    {
        $attributes = $this->request->only($this->transactionRepository->getFillable());

        $attributes['transaction_date'] = Carbon::now();

        $transaction = $this->transactionRepository->create($attributes);

        return new TransactionResource($transaction, '');
    }
}
