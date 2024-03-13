<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UpdateCategory implements ValidationRule
{

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(strip_tags($value) != $value){
            $fail('cest pas bon');
        };
    }
}

