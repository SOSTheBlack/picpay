<?php

namespace App\Http\Controllers\Transactions;

use App\Http\Controllers\ApiController;
use App\Repositories\Contracts\TransactionRepository;
use App\Services\Transaction\TranactionService;

/**
 * Class TransactionController
 *
 * @package App\Http\Controllers\Transactions
 */
class TransactionController extends ApiController
{
    /**
     * @var TransactionRepository
     */
    protected $transactionRepository;

    /**
     * @var TranactionService
     */
    protected $transactionService;

    /**
     * TransactionController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->transactionRepository = app(TransactionRepository::class);
        $this->transactionService = new TranactionService();
    }
}
