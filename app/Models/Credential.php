<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Credential extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'type_permission'
    ];

    public function user(): HasMany{
        return $this->HasMany(User::class);
    }


}
