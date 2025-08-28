<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CityTranslation extends Model
{
    use HasFactory;

    /** @var string[] */
    protected $fillable = [
        'city_id',
        'locale',
        'name',
    ];

    /** @var string[] */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
