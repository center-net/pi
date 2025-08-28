<?php

declare(strict_types=1);

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;

    /** @var string[] */
    public $translatedAttributes = ['name'];

    /** @var string[] */
    protected $fillable = ['key', 'color'];

    public function permission(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'role_id');
    }

    public function hasPermission(string $key): bool
    {
        return $this->permission->contains('key', $key);
    }

    public function userTrashed(): HasMany
    {
        return $this->hasMany(User::class)->onlyTrashed();
    }
}
