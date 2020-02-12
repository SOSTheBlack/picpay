<?php

namespace App\Repositories\Eloquent;

/**
 * Trait SupportEloquent
 *
 * @package App\Repositories\Eloquent
 */
trait SupportEloquent
{
    /**
     * Generate new bcrypt hash.
     *
     * @param string $text
     *
     * @return string
     */
    protected static function generateHash(string $text): string
    {
        return app('hash')->make($text);
    }
}
