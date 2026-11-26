<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rab extends Model
{
    protected $fillable = [
        'project_name',
        'project_type',
        'quality_tier',
        'subtotal',
        'overhead',
        'tax',
        'grand_total',
        'user_id',
        'metadata'
    ];

    protected $casts = [
        'metadata' => 'array',
        'subtotal' => 'decimal:2',
        'overhead' => 'decimal:2',
        'tax' => 'decimal:2',
        'grand_total' => 'decimal:2',
    ];

    public function items(): HasMany
    {
        return $this->hasMany(RabItem::class);
    }
}
