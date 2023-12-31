<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'name' => ['required', 'max:255'],
            'cel' => ['required', 'max:16'],
            'email' => ['nullable', 'max:100'],
        ];
    }

    public function validationData()
    {
        $campos = $this->all();
        $campos['cel'] = \str_replace(['(', ')', '-', ' '], '', $campos['cel']);

        $this->replace($campos);

        return $campos;
    }
}
