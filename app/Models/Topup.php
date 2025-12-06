<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Topup extends Model
{
    use HasFactory;

    protected $fillable = [
        'wallet_id',
        'amount',
        'reference',
        'status',
        'metadata',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'metadata' => 'array',
        'created_at' => 'datetime',
    ];

    public function wallet(): BelongsTo
    {
        return $this->belongsTo(Wallet::class);
    }

    public function topupMethods(): HasMany
    {
        return $this->hasMany(\App\Models\TopupMethod::class);
    }
}