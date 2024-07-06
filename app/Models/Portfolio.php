<?php

namespace App\Models;

use App\Services\UploadService;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    
    protected $fillable = ['portfolio'];

        /*
     |--------------------------------------------------------------------------
     | Set Custom Attributes
     |--------------------------------------------------------------------------
    */
    // public function portfolio(): Attribute
    // {
    //     return Attribute::make(
    //         set: fn($value) => !empty($value) ? UploadService::store($value, 'photo') : $this->photo,
    //         get: fn($value) => env('APP_URL').UploadService::url($value),

    //     );
    // }

}
