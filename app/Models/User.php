<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class User extends Authenticatable implements TranslatableContract
{
    use Translatable, HasFactory, Notifiable;

    public $translatedAttributes = ['name'];

    protected $fillable = [
        'email',
        'password',
        'mobile',
        'username',
        'role_id',
        'last_seen',
    ];
    protected $dates = [
        'last_seen',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function setUsernameAttribute($value)
    {
        $this->attributes['username'] = strtolower($value);
    }

    public function findForPassport($username)
    {
        return $this->where('username', $username)->first();
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function referrer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function referrals()
    {
        return $this->hasMany(User::class, 'user_id');
    }

    public function getReferralsCountAttribute()
    {
        return $this->referrals()->count();
    }

    public function hasPermission($key)
    {
        return $this->role->permission->contains('key', $key);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function isOnline()
    {
        return Cache::has('user-is-online' . $this->id);
    }

    
}
