<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url_img extends Model
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
}
