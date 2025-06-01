<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Models\Setting;
use App\Policies\PermissionPolicy;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use App\Policies\SettingPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Permission::class   => PermissionPolicy::class,
        Role::class         => RolePolicy::class,
        User::class         => UserPolicy::class,
        Setting::class         => SettingPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('administrator', fn(User $user) => $user->hasPermission('administrator'));
        Gate::define('merchants', fn(User $user) => $user->hasPermission('merchants'));
        Gate::define('banned', fn(User $user) => $user->hasPermission('banned'));
    }
}
