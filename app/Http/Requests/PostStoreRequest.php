<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
        $rules = [
            'name'        => 'required | max:128',
            'slug'        => 'required | unique:posts,slug',
            'user_id'     => 'required | integer',
            'category_id' => 'required | integer',
            'body'        => 'required',
            'status'      => 'required | in:DRAFT,PUBLISHED',
            'price'       => 'required ',
            'cripto'      => 'required '

        ];
        if ($this->get('file'))
            $rules = array_merge($rules, ['file' => 'mimes:jpg,jpeg,bmp,php']);

        return $rules;
    }
}
