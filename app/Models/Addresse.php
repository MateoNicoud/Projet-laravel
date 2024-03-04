<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
