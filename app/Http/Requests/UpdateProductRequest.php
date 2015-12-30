<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateProductRequest extends Request
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
            'code' => 'required|string|max:36',
            'name' => 'required|string|max:36',
            'layout' => 'required|string|max:36',
            'headline' => 'required|string',
            'content' => 'required|string',
            'theme_id' => 'integer|exists:themes,id',
        ];
    }
}
