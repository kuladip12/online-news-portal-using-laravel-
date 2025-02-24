<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;


class PostFormRequest extends FormRequest
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
    public function rules()
    {
        $rules = [
            'category_id'=>[
                'required',
                'integer'
            ],
            'name'=>[
                'required',
                'string',
                'max:200'
            ],
            'slug'=>[
                'required',
                'string',
                'max:200'
            ],
            
            'description'=>[
                'required'
            ],
            'image' =>[ 
               'nullable',
               'mime:jpeg,jpg,png'

            ],
            'yt_iframe'=>[
                'nullable',
                'string'
                
            ],
            'meta_title'=>[
                'required',
                'string'
            ],
            'meta_description'=>[
                'nullable',
                'string'
            ],
            'meta_keyword'=>[
                'nullable',
                'string'
            ],
            'status'=>[
                'nullable'
            ],
            'tranding'=>[
                'nullable'
            ]
        ];

        return $rules;
    }
}
