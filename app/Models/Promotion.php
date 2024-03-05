<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Promotion extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'starting_date',
        'end_date',
        'value',
        'product_id'
    ];

    public function productOption(): belongsTo
    {
        return $this->belongsTo(ProductOption::class);
    }
}
