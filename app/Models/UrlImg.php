<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlImg extends Model
{
    use HasFactory, HasUuids;

    public $timestamps = false;
    public $fillable = [
        'main_img',
        'back_img',
        'left_img',
        'right_img',
        'front_img'
    ];
}
