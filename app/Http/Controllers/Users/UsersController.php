<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\ApiController;
use App\Repositories\Contracts\UserRepository;

/**
 * Class UsersController
 *
 * @package App\Http\Controllers\Users
 */
abstract class UsersController extends ApiController
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * UsersController constructor.
     */
    public function __construct()
    {
        $this->initialize();
    }

    /**
     *
     */
    protected function initialize(): void
    {
        $this->userRepository = app(UserRepository::class);
    }
}
