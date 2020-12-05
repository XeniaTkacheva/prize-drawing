<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'prize_id',
        'amount',
    ];

    /**
     * Get the prize that owns the round.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function prize()
    {
        return $this->belongsTo('App\Models\Prize');
    }
}
