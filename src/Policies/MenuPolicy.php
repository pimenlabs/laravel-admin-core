<?php

namespace BalajiDharma\LaravelAdminCore\Policies;

use App\Models\User;
use BalajiDharma\LaravelMenu\Models\Menu;
use Illuminate\Auth\Access\HandlesAuthorization;

class MenuPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any menus.
     *
     * @param  User  $user
     * @return mixed
     */
    public function adminViewAny(User $user)
    {
        return $user->can('menu list');
    }

    /**
     * Determine whether the user can view a specific menu.
     *
     * @param  User  $user
     * @param  Menu  $menu
     * @return mixed
     */
    public function adminView(User $user, Menu $menu)
    {
        return $user->can('menu list');
    }

    /**
     * Determine whether the user can create menus.
     *
     * @param  User  $user
     * @return mixed
     */
    public function adminCreate(User $user)
    {
        return $user->can('menu create');
    }

    /**
     * Determine whether the user can update a specific menu.
     *
     * @param  User  $user
     * @param  Menu  $menu
     * @return mixed
     */
    public function adminUpdate(User $user, Menu $menu)
    {
        return $user->can('menu edit');
    }

    /**
     * Determine whether the user can delete a specific menu.
     *
     * @param  User  $user
     * @param  Menu  $menu
     * @return mixed
     */
    public function adminDelete(User $user, Menu $menu)
    {
        return $user->can('menu delete');
    }
}
