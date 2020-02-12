<?php

namespace App\Repositories\Eloquent\Scopes;

use Illuminate\Http\Request;

/**
 * Class BaseScope
 *
 * @package App\Repositories\Eloquent\Scopes
 */
class BaseScope
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * BaseScope constructor.
     */
    public function __construct()
    {
        $this->request = app('request');
    }
}
