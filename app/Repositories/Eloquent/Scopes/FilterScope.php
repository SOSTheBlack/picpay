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
     * @param  Builder $builder
     * @param  Model   $model
     *
     * @return void
     */
    public function apply(Builder $builder, Model $model): void
    {
        if ($this->request->has(self::FILTER_KEY) || $model instanceof User) {
            $filter = $this->request->get(self::FILTER_KEY);

            $builder
                ->Where('full_name', 'like', "{$filter}%")
                ->orWhereHas('consumer', function(Builder $builder) use ($filter) {
                    $builder->where('username', 'like', "{$filter}%");
                })->orWhereHas('seller', function(Builder $builder) use ($filter) {
                    $builder->where('username', 'like', "{$filter}%");
                });
        }
    }
}
