<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;


class ModelPolicy
{
    /**
     * Create a new policy instance.
     */
    //public function __construct()
    // {
    //     //
    // }
    /**
     * Determine if the given post can be updated by the user.
     */
    public function update(User $user, Post $post)
    {
        return $user->id === $post->user_id;
    }

    /**
     * Determine if the given post can be deleted by the user.
     */
    public function delete(User $user, Post $post)
    {
        return $user->id === $post->user_id;
    }
}
