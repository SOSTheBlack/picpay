<?php

namespace App\Http\Controllers\Transactions;

use App\Http\Resources\TransactionResource;

/**
 * Class FindController
 *
 * @package App\Http\Controllers\Transactions
 */
class FindController extends TransactionController
{
    /**
     * @param int $transactionId
     *
     * @return TransactionResource
     */
    public function __invoke(int $transactionId): TransactionResource
    {
        $transaction = $this->transactionRepository->find($transactionId);

        return new TransactionResource($transaction, '');
    }
}
