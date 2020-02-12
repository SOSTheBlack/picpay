<?php

namespace App\Http\Controllers\Users;

use App\Http\Resources\UserResource;

/**
 * Class FindController
 *
 * @package App\Http\Controllers\Users
 */
class FindController extends UserController
{
    /**
     * @param int $userId
     *
     * @return UserResource
     */
    public function __invoke(int $userId): UserResource
    {
        $user = $this->userRepository->find($userId);

        return new UserResource($user);
    }
}
