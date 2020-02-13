<?php

namespace App\Services\Transaction;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

/**
 * Class TranactionService.
 *
 * @package App\Services\Transaction
 */
class TranactionService extends Client
{
    /**
     * @const string
     */
    const ENDPOINT_VALID_TRANSACTION = '/api/transaction';

    /**
     * TranactionService constructor.
     */
    public function __construct()
    {
        $config = [
            'base_uri' => 'https://www.histovet.com.br'
        ];

        parent::__construct($config);
    }

    /**
     * @param float $valueTransaction
     *
     * @throws ClientException
     */
    public function validTransaction(float $valueTransaction)
    {
        $url = self::ENDPOINT_VALID_TRANSACTION . '?' . http_build_query(['value' => $valueTransaction]);

        $this->get($url);
    }
}
