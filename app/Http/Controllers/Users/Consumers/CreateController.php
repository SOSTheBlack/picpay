<?php

namespace App\Http\Controllers\Users\Consumers;

use App\Http\Resources\ConsumerResource;
use Illuminate\Http\Request;

/**
 * Class CreateController
 *
 * @package App\Http\Controllers\Users\Consumers
 */
class CreateController extends ConsumerController
{
    public function __invoke(Request $request)
    {
        $consumer = $this->consumerRepository->create($request->all());

        return new ConsumerResource($consumer, '');
    }
}
