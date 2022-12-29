<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class partnerRequest extends FormRequest
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
            'name'=>'min:2|max:20|unique:partners,name',
            'photo'=>'min:2|max:20'
        ];
    }
    public function messages()
    {
        return [
                'name.min'=>'Should be more than 2 char',
                'name.max'=>'should be less than 20 char',
                'photo.min'=>'should be more than 2 char',
                'photo.max'=>'should be less than 20 char'
        ];
    }
}
