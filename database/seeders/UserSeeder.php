<?php

namespace Database\Seeders;

use App\Models\City;
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
        $role_keys = array_keys(config('roles.roles'));
        $roles = Role::whereIn('key', $role_keys)->pluck('id', 'key');

        $country = Country::where('code','ps')->first()->id;
        $province = City::where('country_id', $country)->first()->id;

        $users = [
            'admin' => [
                'email' => 'admin@admin.com',
                'mobile' => '0566907902',
            ],
            'supervisor' => [
                'email' => 'supervisor@admin.com',
                'mobile' => '0566907903',
            ],
            'moderator' => [
                'email' => 'moderator@admin.com',
                'mobile' => '0566907904',
            ],
            'vendor' => [
                'email' => 'vendor@admin.com',
                'mobile' => '0566907905',
            ],
            'customer' => [
                'email' => 'customer@admin.com',
                'mobile' => '0566907906',
            ],
            'banned' => [
                'email' => 'banned@admin.com',
                'mobile' => '0566907907',
            ],
        ];

        $adminUser = User::firstOrCreate(
            ['email' => $users['admin']['email']],
            [
                'username'          => 'admin',
                'mobile'             => $users['admin']['mobile'],
                'email_verified_at' => now(),
                'password'          => Hash::make('123123'), // password
                'remember_token'    => Str::random(10),
                'role_id'           => $roles['admin'],
                'country_id'           => $country,
                'city_id'           => $province,
                'referrer_id'    => null,
                'last_seen'         => null,
            ]
        );
        unset($users['admin']);

        foreach ($users as $username => $userData) {
            User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'username'          => $username,
                    'mobile'             => $userData['mobile'],
                    'email_verified_at' => now(),
                    'password'          => Hash::make('123123'), // password
                    'remember_token'    => Str::random(10),
                    'role_id'           => $roles[$username],
                    'country_id'           => $country,
                    'city_id'           => $province,
                    'referrer_id'    => $adminUser->id,
                    'last_seen'         => null,
                ]
            );
        }
    }
    
}
