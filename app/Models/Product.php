<?php

declare(strict_types=1);

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    /** @var string[] */
    public $translatedAttributes = ['name', 'description', 'short_description', 'slug', 'meta_title', 'meta_description', 'meta_keywords'];

    /** @var string[] */
    protected $fillable = [
        'store_id',
        'store_category_id',
        'sku',
        'price',
        'special_price',
        'special_price_start',
        'special_price_end',
        'quantity',
        'is_active',
        'is_featured',
        'sort_order',
    ];

    /** @var array<string, string> */
    protected $casts = [
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'price' => 'decimal:2',
        'special_price' => 'decimal:2',
        'special_price_start' => 'date',
        'special_price_end' => 'date',
    ];

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(StoreCategory::class, 'store_category_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    public function mainImage()
    {
        return $this->hasOne(ProductImage::class)->where('is_main', 1);
    }

    // Get active products
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    // Get featured products
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', 1);
    }

    // Get current price (considering special price if applicable)
    public function getCurrentPriceAttribute()
    {
        if ($this->special_price && $this->special_price > 0) {
            $now = now();
            
            if (
                (!$this->special_price_start || $now->gte($this->special_price_start)) &&
                (!$this->special_price_end || $now->lte($this->special_price_end))
            ) {
                return $this->special_price;
            }
        }
        
        return $this->price;
    }

    // Check if product is on sale
    public function getIsOnSaleAttribute()
    {
        return $this->special_price && $this->special_price > 0 && $this->special_price < $this->price &&
            (!$this->special_price_start || now()->gte($this->special_price_start)) &&
            (!$this->special_price_end || now()->lte($this->special_price_end));
    }

    // Check if product is in stock
    public function getIsInStockAttribute()
    {
        return $this->quantity > 0;
    }
}