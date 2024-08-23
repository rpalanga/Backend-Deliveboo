<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantRequest extends FormRequest
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
            // 'name' => 'required|max:200',
            // 'img' => 'nullable|max:5000',
            // 'description' => 'nullable|max:5000',
            // 'address' => 'required',
            // 'vat' => 'required',
            // 'phone_number' => 'required'
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         'name.required' => 'Inserisci Titolo!!',
    //         'name.max' => "Puoi usare al massimo :max caratteri",
    //         'img.max' => "Puoi usare al massimo :max caratteri",
    //         'description.max' => "Puoi usare al massimo :max caratteri",
    //         'address.required' => 'Inserisci un indirizzo valido',
    //         'vat.required' => 'Inserisci un numero valido',
    //         'phone_number.required' => 'Inserisci un numero di telefono valido'
    //     ];
    // }
}
