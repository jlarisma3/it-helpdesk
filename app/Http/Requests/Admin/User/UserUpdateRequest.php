<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
{
    /**
     * @var string
     */
    protected $errorBag = 'userForm';

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
        return [
            'email' => [
                'required',
                'max:255',
                Rule::unique('users')->ignore($this->user)
            ],
            'address' => 'required|max:255',
            'contact_no' => 'required|max:100',
            'role_id' => 'required|numeric',
            'status_id' => 'required|numeric',
            'password' => [Rule::requiredIf(!is_null($this->password))]
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
