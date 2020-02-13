<?php

namespace App\Http\Resources;

use App\Entities\Seller;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class User
 *
 * @package App\Http\Resources
 *
 * @mixin Seller
 */
class SellerResource extends JsonResource
{
    /**
     * @const string
     */
    private const WRAP = 'sellers';

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
            'cnpj' => $this->cnpj,
            'fantasy_name' => $this->fantasy_name,
            'id' => $this->id,
            'social_name' => $this->social_name,
            'user_id' => $this->user_id,
            'username' => $this->username,
        ];
    }
}
