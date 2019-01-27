<?php

namespace App\Policies;

use App\User;
use App\Blog;

use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct(User $user, Blog $project)
    {
        return $project->owner_id == $user->id;
    }
}
