<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    public $timestamps = false;

    /** @var string[] */
    protected $fillable = [
        'name',
        'description',
        'short_description',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}