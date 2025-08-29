<?php

declare(strict_types=1);

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StoreCategory extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    /** @var string[] */
    public $translatedAttributes = ['name', 'description', 'slug', 'meta_title', 'meta_description', 'meta_keywords'];

    /** @var string[] */
    protected $fillable = [
        'store_id',
        'parent_id',
        'image',
        'icon',
        'is_active',
        'sort_order',
    ];

    /** @var array<string, string> */
    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    // Get all active categories
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    // Get main categories (no parent)
    public function scopeMain($query)
    {
        return $query->whereNull('parent_id');
    }
}