<?php

declare(strict_types=1);

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model implements TranslatableContract
{
    use HasFactory;
    use SoftDeletes;
    use Translatable;

    /** @var string[] */
    public $translatedAttributes = ['name'];

    /** @var string[] */
    protected $fillable = [
        'code',
        'currency',
        'currency_symbol',
        'phone_code',
        'is_active',
    ];

    /** @var array<string, string> */
    protected $casts = [
        'is_active' => 'boolean',
    ];

    /** @var string[] */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function setCodeAttribute(string $value): void
    {
        $this->attributes['code'] = strtoupper($value);
    }

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}

