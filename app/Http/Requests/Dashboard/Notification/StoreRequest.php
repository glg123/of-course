<?php

namespace App\Http\Requests\Dashboard\Notification;

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
            'title'         => 'required|min:3',
            'tag_id'        => 'sometimes|nullable|exists:tags,id',
            'gender'        => 'sometimes|nullable|in:male,female',
            'user_ids'       => 'sometimes|nullable|array',
            'contain_name'  => 'sometimes|nullable|in:1',
        ];
    }
}
