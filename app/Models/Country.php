<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'code'];


    public function setIso3Attribute($value)
    {
        $this->attributes['code'] = strtoupper($value);
    }

    public function provinces(){
        return $this->hasMany(Province::class);
    }

    public function user(){
        return $this->hasMany(User::class);
    }
}
