<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cosumer.
 *
 * @package App\Entities
 * @property int $id
 * @property int $user_id
 * @property string $username
 * @property string $cnpj
 * @property string $social_name
 * @property string $fantasy_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Seller newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Seller newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Seller query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Seller whereCnpj($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Seller whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Seller whereFantasyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Seller whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Seller whereSocialName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Seller whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Seller whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Seller whereUsername($value)
 * @mixin \Eloquent
 */
class Seller extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['cnpj', 'fantasy_name', 'social_name', 'user_id', 'username'];
}
