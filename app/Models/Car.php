<?php

namespace App\Models;

use App\Services\UploadService;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Car extends Model
{
    use HasFactory;
    
    public function company() {
        return $this->belongsTo(Company::class);
    }
    
    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function getLicenceFileAttribute($value) 
    {
        return env('APP_URL').'/storage/'.$value;
    }

    public function getAssuranceAttribute($value) 
    {
        if($value == '0') {
            return 'تامين غير شامل ';
        }
        
        return 'تامين شامل';
        
    }

    public function getWithDriverAttribute($value) 
    {
        if($value == '0') {
            return 'بدون سائق ';
        }
        
        return 'بسائق';
        
    }

    public function getStatusAttribute($value) 
    {
        if($value == '0') {
            return 'متاحة ';
        }
        
        return 'غير متاحة';
        
    }
    
    public function getkilosAttribute($value) 
    {
        return  "كيلومتر  / اليوم ". $value  ;
        
    }

}
