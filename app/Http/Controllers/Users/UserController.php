<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\ApiController;
use App\Repositories\Contracts\UserRepository;

/**
 * Class UsersController
 *
 * @package App\Http\Controllers\Users
 */
abstract class UserController extends ApiController
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
        parent::__construct();

        $this->userRepository = app(UserRepository::class);
    }
}
