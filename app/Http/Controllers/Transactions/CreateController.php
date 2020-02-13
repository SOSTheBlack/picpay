<?php

namespace App\Http\Controllers\Transactions;

use App\Exceptions\Repositories\RepositoryException;
use App\Http\Resources\TransactionResource;
use Carbon\Carbon;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\JsonResponse;

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
     * @throws RepositoryException|JsonResponse
     */
    public function __invoke()
    {
        try {
            $attributes = $this->request->only($this->transactionRepository->getFillable());

            $this->transactionService->validTransaction($attributes['value']);

            $attributes['transaction_date'] = Carbon::now();

            $transaction = $this->transactionRepository->create($attributes);

            return new TransactionResource($transaction, '');
        } catch (ClientException $exception) {
            return response()->json(['code' => 401, 'mesage' => 'Transaction equal to or greater than 100 is not allowed'], 401);
        }
    }
}
