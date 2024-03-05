<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Addresse extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'zip_code',
        'city',
        'country',
        'phone_delivery',
        'first_name',
        'last_name',
        'address_delivery',
    ];
    public function order(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
