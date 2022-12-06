<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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
     * マイページアクセス制限
     */
    public function ctrlMyPage(User $user, User $model)
    {
        return $user->id === $model->id;
    }
}
