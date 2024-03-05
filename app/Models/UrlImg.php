<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UrlImg extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $fillable = [
        'main_img',
        'back_img',
        'left_img',
        'right_img',
        'front_img'
    ];
    public function product(): HasMany
    {
        return $this->hasMany(ProductOption::class);
    }
}
