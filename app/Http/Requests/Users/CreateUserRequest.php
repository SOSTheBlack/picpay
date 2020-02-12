<?php

namespace App\Http\Requests\Users;

use App\Http\Requests\FormRequest;
use Illuminate\Http\Request;

/**
 * Class CreateUserRequest
 *
 * @package App\Http\Requests\Users
 */
class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return app('auth')->guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'cpf' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:App\Entities\User'],
            'full_name' => ['required', 'string'],
            'password' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
        ];
    }
}
