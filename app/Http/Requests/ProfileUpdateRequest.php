<?php
namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'username' => [
                'required',
                'string',
                'max:255',
                'regex:/^[\w\_\.]+$/i',
                Rule::unique(User::class)->ignore($this->user()->id)
            ],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($this->user()->id)
            ],
        ];
    }

    // Custom messages for better user experience
    public function messages()
    {
        return [
            'username.regex' => 'Username can only contain alphanumeric characters, underscores (_), and dots (.)!',
            'username.unique' => 'The username has already been taken. Please choose another one.',
        ];
    }
}
