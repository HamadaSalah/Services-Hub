<?php

namespace App\Models;

use App\Services\UploadService;
use App\Traits\CreatedByObserver;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Env;

class File extends Model
{
 
    public bool $inPermission = true;

    protected $fillable = ['path', 'fileable_id', 'fileable_type'];

    protected $appends = [];

    /*
     |--------------------------------------------------------------------------
     | Custom Attributes
     |--------------------------------------------------------------------------
    */
    public function name(): Attribute
    {
        return Attribute::make(
            set: fn($value) => $value ?: request('path')?->getClientOriginalName()
        );
    }

    public function path(): Attribute
    {
        return Attribute::make(
            get: fn($value) => env('APP_URL').UploadService::url($value),
//            set: fn($value) => !empty($value) ? UploadService::store($value) : $this->path
        );
    }
 

    /*
     |--------------------------------------------------------------------------
     | Relations methods
     |--------------------------------------------------------------------------
    */
    public function fileable(): MorphTo
    {
        return $this->morphTo();
    }
}
