<?php

namespace App\Entities;

use App\Repositories\Eloquent\Scopes\FilterScope;
use App\Repositories\Eloquent\Scopes\OrderByScope;
use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

/**
 * Class User
 *
 * @package App\Entities
 * @property int                             $id
 * @property string                          $name
 * @property string                          $email
 * @property string|null                     $email_verified_at
 * @property string                          $password
 * @property string|null                     $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int                             $cpf
 * @property string                          $phone_number
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereCpf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User wherePhoneNumber($value)
 * @property string $full_name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\User whereFullName($value)
 */
class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['cpf', 'email', 'full_name', 'password', 'phone_number'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public $validator = [
        'cpf' => ['required', 'string'],
        'email' => ['required', 'string', 'email', 'unique:users'],
        'full_name' => ['required', 'string'],
        'password' => ['required', 'string'],
        'phone_number' => ['required', 'string'],
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        self::addGlobalScope(new FilterScope());
        self::addGlobalScope(new OrderByScope());
    }
}
