<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'wallet_id',
        'expense_group_id',
        'amount',
        'reference',
        'description',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'created_at' => 'datetime',
    ];

    public function wallet(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Wallet::class);
    }

    public function expenseGroup(): BelongsTo
    {
        return $this->belongsTo(\App\Models\ExpenseGroup::class);
    }
}