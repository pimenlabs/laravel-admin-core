<?php

namespace BalajiDharma\LaravelAdminCore\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any roles.
     *
     * @param  User  $user
     * @return mixed
     */
    public function adminViewAny(User $user)
    {
        return $user->can('role list');
    }

    /**
     * Determine whether the user can view a specific role.
     *
     * @param  User  $user
     * @param  Role  $role
     * @return mixed
     */
    public function adminView(User $user, Role $role)
    {
        return $user->can('role list');
    }

    /**
     * Determine whether the user can create roles.
     *
     * @param  User  $user
     * @return mixed
     */
    public function adminCreate(User $user)
    {
        return $user->can('role create');
    }

    /**
     * Determine whether the user can update a specific role.
     *
     * @param  User  $user
     * @param  Role  $role
     * @return mixed
     */
    public function adminUpdate(User $user, Role $role)
    {
        return $user->can('role edit');
    }

    /**
     * Determine whether the user can delete a specific role.
     *
     * @param  User  $user
     * @param  Role  $role
     * @return mixed
     */
    public function adminDelete(User $user, Role $role)
    {
        return $user->can('role delete');
    }
}
