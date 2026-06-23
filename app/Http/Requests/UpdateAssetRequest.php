<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAssetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom'          => 'required|string|max:255',
            'numero_serie' => 'nullable|string|max:255|unique:assets,numero_serie',
            'marca'        => 'nullable|string|max:255',
            'model'        => 'nullable|string|max:255',
            'category_id'  => 'required|exists:categories,id',
            'user_id'      => 'nullable|exists:users,id',
            'estat'        => 'required|in:actiu,reserva,baixa',
            'ubicacio'     => 'nullable|string|max:255',
            'data_compra'  => 'nullable|date',
            'preu'         => 'nullable|numeric|min:0',
            'notes'        => 'nullable|string',
        ];
    }
}
