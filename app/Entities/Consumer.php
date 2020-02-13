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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Consumer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Consumer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Consumer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Consumer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Consumer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Consumer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Consumer whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Consumer whereUsername($value)
 * @mixin \Eloquent
 */
class Consumer extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'username'];
}
