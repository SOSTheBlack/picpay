<?php

namespace App\Http\Resources;

use App\Entities\User;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * Class UserCollection
 *
 * @package App\Http\Resources
 */
class ConsumerCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request): array
    {
        $this->collection->transform(function (User $user) {
            return (new UserResource($user, ''));
        });

        return parent::toArray($request);
    }
}
