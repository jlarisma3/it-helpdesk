<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;
use Laravel\Fortify\Rules\Password;

class UserRequest extends FormRequest
{
    /**
     * @var string
     */
    protected $errorBag = 'userForm';

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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'branch_id' => 'required|numeric',
            'department_id' => 'required|numeric',
            'role_id' => 'required|numeric',
            'status_id' => 'required|numeric',
            'password'=> ['required', 'string', new Password]
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'status_id' => [
                'required' => 'Please select status'
            ],
            'role_id' => [
                'required' => 'Please select a role'
            ],
            'branch_id' => [
                'required' => 'Please select a branch'
            ],
            'department' => [
                'required' => 'Please select a department'
            ]
        ];
    }
}
