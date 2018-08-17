<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
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

    public function messages()
    {
        return [
            'title.required' => '标题不能为空',
            'title.max' => '标题不能大于50个字符',
            'test-editormd.required' => '内容不能为空',
            'text-editormd.string' => '内容不能少于10个字符',
            'cat.numeric' => '分类不能为空',
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:50',
            'cat' => 'required|numeric',
            'test-editormd' => 'required|string'
        ];
    }
}
