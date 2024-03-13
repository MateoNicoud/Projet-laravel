<?php

namespace App\Http\Requests;

use App\Rules\UpdateCategory;
use Illuminate\Foundation\Http\FormRequest;

class AddStorage extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'name' => ['required', 'unique:products,name', 'max:255'],
                'brand' =>['required','max:255'],
                'price_ttc' =>['required','max:255'],
//            'vat' =>['required','exists:vats,vat'],
//            'category' =>['required','exists:categories,name'],
                'description' =>['required', 'max:255'],
//            'stock' =>['required','integer'],
//            'weigth' =>['required','numeric'],
                'option' =>['required','unique:product_options,option', new UpdateCategory,'max:255']
        ];
    }
}
