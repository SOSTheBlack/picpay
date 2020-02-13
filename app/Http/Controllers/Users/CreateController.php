<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

/**
 * Class CreateController.
 *
 * @package App\Http\Controllers\Users
 */
class CreateController extends UserController
{
    /**
     * @param Request $request
     *
     * @return UserResource
     *
     * @throws \App\Exceptions\Repositories\RepositoryException
     */
    public function __invoke(Request $request): UserResource
    {
        $user = $this->userRepository->create($request->all());

        return (new UserResource($user, ''));
    }
}
