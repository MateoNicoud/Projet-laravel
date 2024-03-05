<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Order extends Model
{
    use HasFactory, HasUuids;
    
    protected $fillable = [
        'reference',
        'total_price',
        'delivery_date',
        'shipping_date',
        'ordering_date',
        'delivery_fee',
        'total_weight',
        'status'
    ];

    public function addresse(): BelongsTo
    {
        return $this->belongsTo(Addresse::class);
    }
  
    public function orderline(): HasMany
    {
        return $this->hasMany(OrderLine::class);

    }
}
