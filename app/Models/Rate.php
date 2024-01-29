<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rate extends Model
{
    use HasFactory;

    protected $fillable = ["stars","comment","user_id","employee_id"];

    /*
     |--------------------------------------------------------------------------
     | Set Relations
     |--------------------------------------------------------------------------
    */

    /**
     * @return BelongsTo
     */
    public function employee(): belongsTo {
        return $this->belongsTo(Employee::class);
    }

    /**
     * @return BelongsTo
     */
    public function user() : belongsTo{
        return $this->belongsTo(User::class);
    }

}
