<?php

namespace App\Repositories\Eloquent\Scopes;

use App\Entities\User;
use App\Repositories\Contracts\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FilterScope.
 *
 * @package App\Repositories\Eloquent\Scopes
 */
class FilterScope extends BaseScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @param  \Illuminate\Database\Eloquent\Model   $model
     *
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        if ($model instanceof User && $this->request->has(self::FILTER_KEY)) {
            $filter = $this->request->get(self::FILTER_KEY);

            $builder->where('name', 'like', "{$filter}%");
        }
    }
}
