<?php

namespace App\Http\Requests\Users\Sellers;

use Illuminate\Http\Request;

/**
 * Class CreateSellerRequest
 *
 * @package App\Http\Requests\Users\Sellers
 */
class CreateSellerRequest extends Request
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
            'user_id' => ['required', 'integer'],
            'username' => ['required', 'string', 'username', 'unique:App\Entities\Seller'],
            'cnpj' => ['required', 'string'],
            'fantasy_name' => ['required', 'string'],
            'social_name' => ['required', 'string'],
        ];
    }
}
