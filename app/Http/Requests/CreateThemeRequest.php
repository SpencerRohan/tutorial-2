<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateThemeRequest extends Request
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
            'hex' => 'required|string|max:32',
            'color' => 'required|string|max:32',
            'headline' => 'required|string|max:32',
            'sm_headline' => 'required|string|max:32',
            'body' => 'required|string|max:32',
        ];
    }
}
