<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
            'name'          => 'nullable',
            'phone'         => 'nullable',
            'email'         => 'nullable|email',
            'country'       => 'nullable',
            'city'          => 'nullable',
            'description'   => 'nullable|max:100',
            'password'      => 'nullable',
            'card_id'       => 'nullable',
            'licence'       => 'nullable|file:png,jpg,jpeg,svg,webp',
            'photo'         => 'nullable|file:png,jpg,jpeg,svg,webp',
            'lat'           => 'nullable',
            'lng'           => 'nullable',
            'job_id'           => 'nullable|exists:jobs,id',

        ];
    }
}
