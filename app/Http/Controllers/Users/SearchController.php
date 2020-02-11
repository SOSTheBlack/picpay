<?php

namespace App\Http\Controllers\Users;

use App\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * Class IndexController
 *
 * @package App\Http\Controllers\Users
 */
class SearchController extends UsersController
{
    /**
     * @return AnonymousResourceCollection
     */
    public function __invoke(): AnonymousResourceCollection
    {
        $users = $this->userRepository->all();

        return UserResource::collection($users);
    }
}
