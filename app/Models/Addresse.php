<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresse extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
//        'id_users',
        'zip_code',
        'city',
        'country',
        'phone_delivery',
        'first_name',
        'last_name',
        'address_delivery',
    ];
}
