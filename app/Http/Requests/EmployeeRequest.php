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
            'name' => 'required',
            'joining_date' => 'required',
            'salary' => 'required',
            'basic_salary' => 'required',
            'home_allowance' => 'required',
            'food_allowance' => 'required',
            'medical_allowance' => 'required',
            'conveyance_allowance' => 'required'
        ];
    }
}
