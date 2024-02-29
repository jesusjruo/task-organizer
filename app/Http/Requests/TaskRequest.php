<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    //Only use Requests if you have the same form validations for many forms!
    public function rules(): array
    {
        return [
            'title' => ['required', 'max:255'],
            'description' => 'required',
            'long_description'=> 'required'
        ];
    }
}
