<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'property_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'property_type' => 'required|string|max:255',
            'rent_cost' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            // 'landlord_id' => 'required|exists:landlords,id', 
            // 'image_id' => 'required|exists:images,id', 
        ];
    }
}
