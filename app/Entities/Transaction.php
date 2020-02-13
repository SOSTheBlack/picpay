<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Transaction
 *
 * @package App\Entities
 * @property int $id
 * @property int $payee_id
 * @property int $payer_id
 * @property float $value
 * @property \Illuminate\Support\Carbon|null $transaction_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Entities\Consumer $consumer
 * @property-read \App\Entities\Seller $seller
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Transaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Transaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Transaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Transaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Transaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Transaction wherePayeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Transaction wherePayerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Transaction whereTransactionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Transaction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Transaction whereValue($value)
 * @mixin \Eloquent
 */
class Transaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['payee_id', 'payer_id', 'value', 'transaction_date'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['transaction_date'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'transaction_date' => 'datetime',
    ];

    /**
     * Define an inverse one-to-one or many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function consumer(): BelongsTo
    {
        return $this->belongsTo(Consumer::class, 'payer_id', 'user_id');
    }

    /**
     * Define an inverse one-to-one or many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seller(): BelongsTo
    {
        return $this->belongsTo(Seller::class, 'payee_id', 'user_id');
    }
}
