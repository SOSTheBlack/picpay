<?php

namespace App\Http\Controllers\Users\Sellers;

use App\Exceptions\Repositories\RepositoryException;
use App\Http\Resources\SellerResource;

/**
 * Class CreateController
 *
 * @package App\Http\Controllers\Users\Sellers
 */
class CreateController extends SellerController
{
    /**
     * @return SellerResource
     *
     * @throws RepositoryException
     */
    public function __invoke(): SellerResource
    {
        $attributes = $this->request->only($this->sellerRepository->getFillable());

        $seller = $this->sellerRepository->create($attributes);

        return new SellerResource($seller, '');
    }
}
