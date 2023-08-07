<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormConfirmRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        /** バリデーション内容をここに記述 */
        return [
            'email' => 'required|email',
            'name' => 'required',
            'contact' => 'required'
        ];
    }
}
