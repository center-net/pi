<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Setting extends Model implements TranslatableContract
{
    use Translatable, HasFactory;

    public $translatedAttributes = ['name', 'address'];

    protected $fillable = ['logo', 'icon',  'email', 'phone', 'facebook', 'twitter', 'linkedin', 'instagram'];

    const CACHE_KEY = 'site_settings';

    public static function boot()
    {
        parent::boot();

        // مسح الكاش عند أي تغيير في الإعدادات
        static::saved(function () {
            Cache::forget(self::CACHE_KEY);
        });

        static::deleted(function () {
            Cache::forget(self::CACHE_KEY);
        });
    }

   public static function getSettings()
    {
        foreach(self::all() as $settings){
            return $settings;
        }
       
    }
}
