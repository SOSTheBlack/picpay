<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Scope as BaseScope;

/**
 * Interface Scope
 *
 * @package App\Repositories\Contracts
 */
interface Scope extends BaseScope
{
    /**
     * @const string
     */
    const FILTER_KEY = 'q';
}
