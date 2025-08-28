<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CountryTranslation extends Model
{
    use HasFactory;

    /** @var string[] */
    protected $fillable = [
        'country_id',
        'locale',
        'name',
    ];

    /** @var string[] */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
