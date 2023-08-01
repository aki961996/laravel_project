<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// app/Http/Requests/StorePostRequest.php

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'date_of_birth' => 'required|date',
            'status' => 'required|in:active,inactive',
        ];
    }
}
