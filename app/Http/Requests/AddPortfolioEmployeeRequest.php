<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPortfolioEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'portfolio' => 'required|file:png,jpg,jpeg,svg,webp,mp4',
        ];
    }
}
