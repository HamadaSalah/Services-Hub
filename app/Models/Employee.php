<?php

namespace App\Models;

use App\Services\UploadService;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Employee extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['name','phone','email','country','city','description','password','card_id','licence','photo','intro_video','lat','lng', 'job_id'];

    /*
     |--------------------------------------------------------------------------
     | Set Relations
     |--------------------------------------------------------------------------
    */

    public function job() {

        return $this->belongsTo(Job::class);

    }
    public function portfolio() {

        return $this->hasMany(Portfolio::class);

    }

    /*
     |--------------------------------------------------------------------------
     | Set Custom Attributes
     |--------------------------------------------------------------------------
    */
    public function photo(): Attribute
    {
        return Attribute::make(
            set: fn($value) => !empty($value) ? UploadService::store($value, 'photo') : $this->photo,
        );
    }
    public function licence(): Attribute
    {
        return Attribute::make(
            set: fn($value) => !empty($value) ? UploadService::store($value, 'licence') : $this->licence,
        );
    }
    public function cardId(): Attribute
    {
        return Attribute::make(
            set: fn($value) => !empty($value) ? UploadService::store($value, 'card_id') : $this->card_id,
        );
    }
}
