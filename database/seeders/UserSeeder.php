<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_id = Role::where('key','admin')->first()->id;
        $role_id1 = Role::where('key','vendor')->first()->id;
        $role_id2 = Role::where('key','banned')->first()->id;
        $country = Country::where('code','ps')->first()->id;
        $province = Province::where('country_id', $country)->first()->id;
        User::firstOrCreate([
            'username'          => 'admin',
            'email'             => 'admin@admin.com',
            'mobile'             => '0566907902',
            'email_verified_at' => now(),
            'password'          => Hash::make('123123'), // password
            'remember_token'    => Str::random(10),
            'role_id'           => $role_id,
            'country_id'           => $country,
            'province_id'           => $province,
            'last_seen'         => null,
        ]);
        
        $role_id = Role::where('key','supervisor')->first()->id;
        User::firstOrCreate([
            'username'          => 'supervisor',
            'email'             => 'supervisor@admin.com',
            'mobile'             => '0566907903',
            'email_verified_at' => now(),
            'password'          => Hash::make('123123'), // password
            'remember_token'    => Str::random(10),
            'role_id'           => $role_id,
            'country_id'           => $country,
            'province_id'           => $province,
            'last_seen'         => null,
        ]);

        $role_id = Role::where('key','moderator')->first()->id;
        User::firstOrCreate([
            'username'          => 'moderator',
            'email'             => 'moderator@admin.com',
            'mobile'             => '0566907904',
            'email_verified_at' => now(),
            'password'          => Hash::make('123123'), // password
            'remember_token'    => Str::random(10),
            'role_id'           => $role_id,
            'country_id'           => $country,
            'province_id'           => $province,
            'last_seen'         => null,
        ]);
        
        $role_id = Role::where('key','vendor')->first()->id;
        User::firstOrCreate([
            'username'          => 'vendor',
            'email'             => 'vendor@admin.com',
            'mobile'             => '0566907905',
            'email_verified_at' => now(),
            'password'          => Hash::make('123123'), // password
            'remember_token'    => Str::random(10),
            'role_id'           => $role_id1,
            'country_id'           => $country,
            'province_id'           => $province,
            'last_seen'         => null,
        ]);

        $role_id = Role::where('key','customer')->first()->id;
        User::firstOrCreate([
            'username'          => 'customer',
            'email'             => 'customer@admin.com',
            'mobile'             => '0566907906',
            'email_verified_at' => now(),
            'password'          => Hash::make('123123'), // password
            'remember_token'    => Str::random(10),
            'role_id'           => $role_id1,
            'country_id'           => $country,
            'province_id'           => $province,
            'last_seen'         => null,
        ]);

        $role_id = Role::where('key','banned')->first()->id;
        User::firstOrCreate([
            'username'          => 'banned',
            'email'             => 'banned@admin.com',
            'mobile'             => '0566907907',
            'email_verified_at' => now(),
            'password'          => Hash::make('123123'), // password
            'remember_token'    => Str::random(10),
            'role_id'           => $role_id2,
            'country_id'           => $country,
            'province_id'           => $province,
            'last_seen'         => null,
        ]);
    }
    
}
