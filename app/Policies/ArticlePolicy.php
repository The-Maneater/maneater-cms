<?php

namespace App\Policies;

use App\User;
use App\Story;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the index of stories.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function index(User $user)
    {
        if($user->hasPermission('manage-stories')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create stories.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the story.
     *
     * @param  \App\User  $user
     * @param  \App\Story  $story
     * @return mixed
     */
    public function update(User $user, Story $story)
    {

    }

    /**
     * Determine whether the user can delete the story.
     *
     * @param  \App\User  $user
     * @param  \App\Story  $story
     * @return mixed
     */
    public function delete(User $user, Story $story)
    {
        if($user->hasPermission('manage-stories')){
            return true;
        }
        return false;
    }
}
