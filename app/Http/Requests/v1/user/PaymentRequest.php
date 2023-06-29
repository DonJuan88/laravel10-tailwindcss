<?php

namespace App\Http\Requests\v1\user;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required'],
            'paymentdate' => ['required'],
            'paymenttype' => ['required'],
            'total' => ['required'],
            'notes' => ['required']
        ];
    }
}
