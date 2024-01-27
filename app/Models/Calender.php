<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Calender extends Model
{
    use HasFactory;
    protected $fillable = ['details', 'location', 'lat', 'lng', 'date', 'time', 'user_id', 'employee_id'];
    /*
     |--------------------------------------------------------------------------
     | Set Relations
     |--------------------------------------------------------------------------
    */
    public function user() :belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function employee() :belongsTo
    {
        return $this->belongsTo(Employee::class);
    }


}
