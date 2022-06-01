<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'subject' => 'required|min:6',
            'body' => 'required|min:10',
            'article_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'subject.required' => 'Це поле потрібно обовʼязково заповнити',
            'subject.min' => 'Це поле повинно містити більше 6-ти символів',
            'body.required' => 'Це поле потрібно обовʼязково заповнити',
            'body.min' => 'Це поле повинно містити більше 10-ти символів',
        ];

    }
}
