<?php

namespace App\Http\Controllers\Users;

use App\Http\Resources\UserCollection;

/**
 * Class IndexController
 *
 * @package App\Http\Controllers\Users
 */
class SearchController extends UserController
{
    /**
     * @return UserCollection
     */
    public function __invoke(): UserCollection
    {
        $users = $this->userRepository->all();

        return new UserCollection($users);
    }
}
