<?php

namespace App\Rules;

use App\Models\Order;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Contracts\Validation\Rule;

class UniqueDateTime implements Rule
{
    protected $date, $time;

    public function __construct($date, $time)
    {
        $this->date = $date;
        $this->time = $time;
    }

    public function passes($attribute, $value)
    {
        // Check if the combination of date and time is unique in the specified model
        return !Order::where('date', $this->date)->where('time', $this->time)
            ->exists();
    }

    public function message()
    {
        return 'There is an appointment in same time';
    }
}
