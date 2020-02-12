<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;

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
     * @return void
     *
     * @throws \App\Exceptions\Repositories\RepositoryException
     */
    public function __invoke(Request $request)
    {
        $this->userRepository->create($request->all());
    }
}
