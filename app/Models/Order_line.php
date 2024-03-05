<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order_line extends Model
{
    use HasFactory, HasUuids;
    public $timestamps = false;
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
    public function order(): HasOne
    {
        return $this->hasOne(Order::class);
    }
}
