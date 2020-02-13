<?php

namespace App\Http\Resources;

use App\Entities\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class User
 *
 * @package App\Http\Resources
 *
 * @mixin Transaction
 */
class TransactionResource extends JsonResource
{
    /**
     * @const string
     */
    private const WRAP = 'transactions';

    /**
     * UserResource constructor.
     *
     * @param mixed $resource
     * @param string  $wrap
     */
    public function __construct($resource, string $wrap = self::WRAP)
    {
        parent::__construct($resource);

        self::$wrap = $wrap ?? '';
    }

    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     *
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'payee_id' => $this->payee_id,
            'payer_id' => $this->payer_id,
            'transaction_date' => $this->transaction_date->toW3cString(),
            'value' => $this->value
        ];
    }
}
