<?php

namespace App\Http\Controllers\Users;

use App\User;

/**
 * Class IndexController
 *
 * @package App\Http\Controllers\Users
 */
class SearchController extends UsersController
{
    public function __invoke()
    {
        $users =  $this->userRepository->all();

        return $users;
    }
}
