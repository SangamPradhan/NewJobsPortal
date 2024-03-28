<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddJobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'category' => 'required|numeric',
            'title' => 'required',
            'type' => 'required',
            'salary' => 'required|numeric',
            'deadline' => 'required|date|after:tomorrow',
            'description' => 'required|max:5000',
            'photo' => 'nullable|image|max:2048'

        ];
    }
}
