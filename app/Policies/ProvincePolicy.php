<?php

namespace App\Policies;

use App\Models\Province;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProvincePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->hasPermission('browse_provinces');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Province $province)
    {
        return $user->hasPermission('read_provinces');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->hasPermission('add_provinces');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Province $province)
    {
        return $user->hasPermission('edit_provinces');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Province $province)
    {
        return $user->hasPermission('delete_provinces');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Province $province)
    {
        return $user->hasPermission('restore_provinces');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Province $province)
    {
        return $user->hasPermission('forceDelete_provinces');
    }
}
