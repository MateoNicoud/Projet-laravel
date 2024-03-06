<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vat extends Model
{
    use HasFactory, HasUuids;
    public $timestamps = false;
    protected $fillable = [
        'vat'
    ];

    public function productOptions(): HasMany
    {
        return $this->hasMany(ProductOption::class);
    }
}
