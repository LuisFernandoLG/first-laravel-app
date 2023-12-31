<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class savePostRequest extends FormRequest
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

        // Diferenciar métodos
        if ($this->isMethod('patch')) {
            return [
                'title' => ['required', 'min:5'],
                'body' => ['required']
            ];
        }

        return [
            'title' => ['required', 'min:2'],
            'body' => ['required']
        ];
    }
}
