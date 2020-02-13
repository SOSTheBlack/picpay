<?php

namespace App\Http\Controllers\Users\Consumers;

use App\Http\Controllers\Users\UserController;
use App\Repositories\Contracts\ConsumerRepository;

/**
 * Class ConsumerController.
 *
 * @package App\Http\Controllers\Users\Consumers
 */
abstract class ConsumerController extends UserController
{
    /**
     * @var ConsumerRepository
     */
    protected $consumerRepository;

    /**
     * ConsumerController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->consumerRepository = app(ConsumerRepository::class);
    }
}
