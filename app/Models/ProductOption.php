<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductOption extends Model
{
    use HasFactory, HasUuids;

    public $timestamps = false;
    protected $fillable = [
        'option',
        'price_ht',
        'price_ttc',
        'price_vat',
        'price_vat',
        'weight',
        'stock'
    ];

   public function url_img(): BelongsTo
   {
          return $this->belongsTo(UrlImg::class);
   }
    public function product() : BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function promotions(): HasMany
    {
        return $this->hasMany(Promotion::class);

    }

    public function vat(): BelongsTo
    {
        return   $this->belongsTo(Vat::class );
    }

}
