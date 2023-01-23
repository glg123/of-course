<?php

namespace App\Http\Requests\Dashboard\Location;

use Illuminate\Foundation\Http\FormRequest;

class ZoneRequest extends FormRequest
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
            'blocks' => 'required|array|min:1',
            'area_id'  => 'required|exists:locations,id',
            'name'     => 'required|min:3'  
        ];
    }
}