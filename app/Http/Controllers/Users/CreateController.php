<?php

namespace App\Http\Controllers\Users;

use App\Exceptions\Repositories\RepositoryException;
use App\Http\Resources\UserResource;

/**
 * Class CreateController.
 *
 * @package App\Http\Controllers\Users
 */
class CreateController extends UserController
{
    /**
     * @return UserResource
     *
     * @throws RepositoryException
     */
    public function __invoke(): UserResource
    {
        $attributes = $this->request->only($this->userRepository->getFillable());

        $user = $this->userRepository->create($attributes);

        return (new UserResource($user, ''));
    }
}
