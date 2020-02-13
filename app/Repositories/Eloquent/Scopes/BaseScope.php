<?php

namespace App\Repositories\Eloquent\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
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
     * @var Builder
     */
    protected $builder;

    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseScope constructor.
     */
    public function __construct()
    {
        $this->request = app('request');
    }

    protected function setModel(Model $model): BaseScope
    {
        $this->model = $model;

        return $this;
    }

    protected function setBuilder(Builder $builder): BaseScope
    {
        $this->builder = $builder;

        return $this;
    }
}
