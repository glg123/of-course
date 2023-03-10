<?php

namespace App\Http\Requests\Dashboard\Food;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title'      => 'sometimes',
            'show_order' => 'required|numeric',
            'question'   => 'required|min:3|max:250',
            'answer'     => 'required|min:3|max:250',
            'active'     => 'required',
        ];
    }
}