<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Calender extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'employee_id', 'date','time', 'status', 'desc', 'location'];

    public function date(): Attribute
    {
        return Attribute::make(
            set: fn($value) => Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d')
        );
    }

    /**
     * @return HasMany
     */
    public function rates(): HasMany
    {
        return $this->hasMany(Rate::class);
    }

    /**
     * @return HasMany
     */
    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

}
