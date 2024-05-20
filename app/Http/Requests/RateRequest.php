<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RateRequest extends FormRequest
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
            'comment' => 'required',
            'calender_id' => 'required|exists:calenders,id',
            'stars' => 'required|integer|min:0|max:5',
        ];
    }
}
