<?php

declare(strict_types=1);

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;

    /** @var string */
    public const CACHE_KEY = 'site_settings';

    /** @var string[] */
    public $translatedAttributes = ['name', 'address'];

    /** @var string[] */
    protected $fillable = ['logo', 'icon', 'email', 'phone', 'facebook', 'twitter', 'linkedin', 'instagram'];

    public static function boot(): void
    {
        parent::boot();

        static::saved(static function () {
            Cache::forget(self::CACHE_KEY);
        });

        static::deleted(static function () {
            Cache::forget(self::CACHE_KEY);
        });
    }

    public static function getSettings(): self
    {
        return Cache::rememberForever(self::CACHE_KEY, static function () {
            return self::first() ?? new self();
        });
    }
}
