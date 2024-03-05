<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_line extends Model
{
    use HasFactory, HasUuids;
    public function order(): HasOne
    {
        return $this->hasOne(Order::class);
    }
}
