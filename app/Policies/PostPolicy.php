<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Nos dirá si un usuario es propietario de un post
     *
     * @param User $user
     * @param Post $post
     * @return bool
     */
    public function author(User $user, Post $post): bool
    {
        if ($user->id === $post->user_id) {
            return true;
        }
        return false;
    }

    /**
     * Nos dirá si un post está publicado
     *
     * @param User|null $user
     * @param Post $post
     * @return bool
     */
    public function published(?User $user, Post $post): bool
    {
        if ($post->status == 2) {
            return true;
        }
        return false;
    }
}
