<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderLine extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
      'option',
      'reference',
      'description',
      'main_img',
      'brand',
      'price_ht',
      'price_ttc',
      'price_vat',
      'weight',
      'vat',
      'value_promotion'
    ];
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

}
