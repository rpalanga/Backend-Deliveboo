<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDishRequest extends FormRequest
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
            'name' => 'required|max:200',
            'img' => 'nullable|file', 
            'price' => 'required|numeric|between:0,3000.99',
            'description' => 'required|max:5000',
            'ingredients' => 'required|max:5000',
            // 'is_visible' => 'boolean'
        ];
    }

    public function messages(): array {
        return [
            'name.required' => 'devi inserire un nome al piatto!',
            'name.max' => 'devi inserire al massimo :max caratteri',
            'img.file' => 'devi inserire un file valido',
            'price.required' => 'devi inserire un prezzo al piatto!',
            // 'price.decimal' => 'il prezzo deve avere almeno 2 decimali!',
            'price.numeric' =>'Inserisci una cifra Corretta',
            'price.between' => 'Il prezzo deve essere compreso tra :min e :max',
            'description.required' => 'devi inserire una descrizione al piatto!',
            'description.max' => 'devi inserire al massimo :max caratteri',
            'ingredients.required' => 'devi inserire almeno un ingrediente al piatto!',
            'ingredients.max' => 'devi inserire al massimo :max caratteri',
            // 'is_visible.boolean' => 'Inserisci'
        ];
    }
}
