<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoleTranslation extends Model
{
    use HasFactory;

    /** @var bool */
    public $timestamps = false;

    /** @var string[] */
    protected $fillable = ['name', 'role_id', 'locale'];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
