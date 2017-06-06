<?php

namespace App\Policies;

use App\Comment;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * @return bool
     */
    public function before()
    {
        return Auth::check();
    }

    /**
     * Determine whether the user can view the user.
     *
     * @param  \App\User  $user
     * @param  \App\User  $subject
     * @return mixed
     */
    public function view(User $user, Comment $comment)
    {
        if (Auth::user()->isModerator()) {
            return true;
        } else {
            return $comment->user()->id === $user->id;
        }
    }

    /**
     * Determine whether the user can create users.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the user.
     *
     * @param  \App\User  $user
     * @param  \App\User  $subject
     * @return mixed
     */
    public function update(User $user, User $subject)
    {
        return $this->before() ? true : false;
    }

    /**
     * Determine whether the user can delete the user.
     *
     * @param  \App\User  $user
     * @param  \App\User  $subject
     * @return mixed
     */
    public function delete(User $user, User $subject)
    {
        return Auth::user()->isModerator ? true : false;
    }
}
