<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticaleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'department_id'=> 'required',
            'user_id'=>'required',
            'image' => 'required|image|max:700',
            'title'=>'required|string|min:5',
            'description'=>'required|min:10',
            'conclusion'=>'nullable|string|min:3',
        ];
    }
}
