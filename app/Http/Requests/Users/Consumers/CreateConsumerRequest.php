<?php

namespace App\Http\Requests\Users\Consumers;

use Illuminate\Http\Request;

/**
 * Class CreateConsumerRequest
 *
 * @package App\Http\Requests\Users\Consumers
 */
class CreateConsumerRequest extends Request
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
            'username' => ['required', 'string', 'username', 'unique:App\Entities\Consumer'],
        ];
    }
}
