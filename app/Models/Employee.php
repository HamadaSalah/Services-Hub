<?php

namespace App\Models;

use App\Services\UploadService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method order()
 */
class Employee extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['name','phone','email','country','city','description','password','card_id','licence','photo','intro_video','lat','lng', 'job_id'];

    /*
     |--------------------------------------------------------------------------
     | Set Relations
     |--------------------------------------------------------------------------
    */

    /**
     * @return BelongsTo
     */
    public function job(): belongsTo {
        return $this->belongsTo(Job::class);
    }

    /**
     * @return HasMany
     */
    public function portfolio(): HasMany
    {
        return $this->hasMany(Portfolio::class)->latest()->take(8);
    }

    /**
     * @return HasMany
     */
    public function rates(): hasMany
    {
        return $this->hasMany(Rate::class)->latest()->take(8);
    }

    /**
     * @return HasMany
     */
    public function orders(): hasMany
    {
        return $this->hasMany(Calender::class)->latest();
    }
    /**
     * @return HasMany
     */
    public function latestProjects(): hasMany
    {
        return $this->hasMany(Calender::class)->where('status', 2)->latest();
    }

    /**
     * @return HasMany
     */
    public function prevWorks(): hasMany
    {
        return $this->hasMany(Calender::class)->where('status', 2)->latest();
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
