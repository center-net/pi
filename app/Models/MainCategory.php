<?php

declare(strict_types=1);

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    /** @var string[] */
    public $translatedAttributes = ['name'];

    /** @var string[] */
    protected $fillable = [];
}
