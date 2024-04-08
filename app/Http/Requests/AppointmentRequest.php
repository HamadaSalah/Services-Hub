<?php

namespace App\Http\Requests;

use App\Rule\UniqueDateTime;
use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
            'date' => ['required', 'date'],
            'time' => ['required', 'date_format:H:i',  new \App\Rules\UniqueDateTime(request()->date, request()->time)],

        ];
    }
}
