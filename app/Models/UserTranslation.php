<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserTranslation extends Model
{
    use HasFactory;

    /** @var bool */
    public $timestamps = false;

    /** @var string[] */
    protected $fillable = ['name', 'address', 'user_id', 'locale'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
