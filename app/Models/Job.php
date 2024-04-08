<?php

namespace App\Models;

use App\Services\UploadService;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'img'];

    /*
     |--------------------------------------------------------------------------
     | Set Relations
     |--------------------------------------------------------------------------
    */

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function img(): Attribute
    {
        return Attribute::make(
            set: fn($value) => !empty($value) ? UploadService::store($value, 'jobs') : $this->img,
        );
    }

}
