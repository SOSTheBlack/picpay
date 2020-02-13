<?php

namespace App\Http\Resources;

use App\Entities\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class User
 *
 * @package App\Http\Resources
 *
 * @mixin User
 */
class UserResource extends JsonResource
{
    /**
     * @const string
     */
    private const WRAP = 'users';

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
            'accounts' => [
                'consumer' => new ConsumerResource($this->consumer, ''),
                'seller' => new SellerResource($this->seller, '')
            ],
            self::WRAP => $this->getStructureUser(),
        ];
    }

    /**
     * @return array
     */
    private function getStructureUser(): array
    {
        return [
            'cpf' => $this->cpf,
            'email' => $this->email,
            'full_name' => $this->name,
            'id' => $this->id,
            'password' => $this->password,
            'phone_number' => $this->phone_number
        ];
    }
}
