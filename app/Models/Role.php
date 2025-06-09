<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Role extends Model implements TranslatableContract
{
    /** @use HasFactory<\Database\Factories\RoleFactory> */
    use Translatable, HasFactory;

    public $translatedAttributes = ['name'];

    protected $fillable = ['key' , 'color'];

    public function permission()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function hasPermission($key)
    {
        return $this->permission->contains('key', $key);
    }

    public function userTrashed()
    {
        return $this->hasMany(User::class)->onlyTrashed();
    }

}
