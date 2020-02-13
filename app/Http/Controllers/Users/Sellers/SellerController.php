<?php

namespace App\Http\Controllers\Users\Sellers;

use App\Http\Controllers\Users\UserController;
use App\Repositories\Contracts\SellerRepository;

/**
 * Class SellerController.
 *
 * @package App\Http\Controllers\Users\Sellers
 */
abstract class SellerController extends UserController
{
    /**
     * @var SellerRepository
     */
    protected $sellerRepository;

    /**
     * SellerController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->sellerRepository = app(SellerRepository::class);
    }
}
