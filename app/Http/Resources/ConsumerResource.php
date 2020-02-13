<?php

namespace App\Http\Resources;

use App\Entities\Consumer;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class User
 *
 * @package App\Http\Resources
 *
 * @mixin Consumer
 */
class ConsumerResource extends JsonResource
{
    /**
     * @const string
     */
    private const WRAP = 'consumers';

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
            'user_id' => $this->user_id,
            'username' => $this->username,
        ];
    }
}
