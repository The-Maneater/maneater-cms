<?php

namespace App\Policies;

use App\User;
use App\Ad;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the index of ads.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function index(User $user)
    {
        if($user->can('manage-ads')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create ads.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the ad.
     *
     * @param  \App\User  $user
     * @param  \App\Ad  $ad
     * @return mixed
     */
    public function update(User $user, Ad $ad)
    {
        if($user->can('manage-ads')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the ad.
     *
     * @param  \App\User  $user
     * @param  \App\Ad  $ad
     * @return mixed
     */
    public function delete(User $user, Ad $ad)
    {
        if($user->can('manage-ads')){
            return true;
        }
        return false;
    }
}
