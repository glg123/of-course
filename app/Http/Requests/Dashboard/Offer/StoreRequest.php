<?php

namespace App\Http\Requests\Dashboard\Offer;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'copoun_id'    => 'required||exists:copouns,id',
            'start_at'    => 'required|date',
            'end_at'    => 'required|date',
            'status'    => 'sometimes',
        ];
    }
}