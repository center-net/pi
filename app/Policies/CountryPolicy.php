<?php

namespace App\Policies;

use App\Models\Country;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CountryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->hasPermission('browse_countries');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Country $country)
    {
        return $user->hasPermission('read_countries');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->hasPermission('add_countries');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Country $country)
    {
        return $user->hasPermission('edit_countries');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Country $country)
    {
        return $user->hasPermission('delete_countries');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Country $country)
    {
        return $user->hasPermission('restore_countries');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Country $country)
    {
        return $user->hasPermission('forceDelete_countries');
    }
}
