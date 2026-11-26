<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RabItem extends Model
{
    protected $fillable = [
        'rab_id',
        'item_number',
        'description',
        'material',
        'volume',
        'unit',
        'qty',
        'mat_price',
        'labor',
        'unit_price',
        'total',
        'specs'
    ];

    protected $casts = [
        'specs' => 'array',
        'volume' => 'decimal:4',
        'qty' => 'decimal:4',
        'mat_price' => 'decimal:2',
        'labor' => 'decimal:2',
        'unit_price' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    public function rab(): BelongsTo
    {
        return $this->belongsTo(Rab::class);
    }
}
