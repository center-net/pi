<?php

declare(strict_types=1);

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;

class User extends Authenticatable implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    use Notifiable;

    /** @var string[] */
    public $translatedAttributes = ['name', 'address'];

    /** @var string[] */
    protected $fillable = [
        'email',
        'password',
        'mobile',
        'username',
        'role_id',
        'last_seen',
        'country_id',
        'city_id',
        'referrer_id',
    ];

    /** @var array<int, string> */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /** @var string[] */
    protected $dates = [
        'last_seen',
        'created_at',
        'updated_at',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function setUsernameAttribute(string $value): void
    {
        $this->attributes['username'] = strtolower($value);
    }

    public function findForPassport(string $username): self
    {
        return $this->where('username', $username)->first();
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function referrer(): BelongsTo
    {
        return $this->belongsTo(self::class, 'referrer_id');
    }

    public function referrals(): HasMany
    {
        return $this->hasMany(self::class, 'referrer_id');
    }

    public function getReferralsCountAttribute(): int
    {
        return $this->referrals()->count();
    }

    public function hasPermission(string $key): bool
    {
        return $this->role->permission->contains('key', $key);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function isOnline(): bool
    {
        return Cache::has('user-is-online-' . $this->id);
    }
}
