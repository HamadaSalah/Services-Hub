<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'time', 'status', 'user_id', 'employee_id'];

    /*
     |--------------------------------------------------------------------------
     | Set Relations
     |--------------------------------------------------------------------------
    */

    /**
     * @return BelongsTo
     */
    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    /**
     * @return BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

}
