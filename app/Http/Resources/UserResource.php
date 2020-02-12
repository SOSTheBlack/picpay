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
     * UserResource constructor.
     *
     * @param mixed $resource
     */
    public function __construct($resource)
    {
        parent::__construct($resource);

        static::$wrap = '';
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
            'cpf' => $this->cpf,
            'email' => $this->email,
            'full_name' => $this->name,
            'id' => $this->id,
            'password' => $this->password,
            'phone_number' => $this->phone_number
        ];
    }
}
