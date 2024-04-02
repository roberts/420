<?php

namespace App\Policies;

use App\Models\Meme;
use Illuminate\Auth\Access\HandlesAuthorization;
use Tipoff\Support\Contracts\Models\UserInterface;

class MemePolicy
{
    use HandlesAuthorization;

    public function viewAny(UserInterface $user)
    {
        return $user->hasPermissionTo('view pages');
    }

    public function view(UserInterface $user, Meme $meme)
    {
        return $user->hasPermissionTo('view pages');
    }

    public function create(UserInterface $user)
    {
        return $user->hasPermissionTo('create pages');
    }

    public function update(UserInterface $user, Meme $meme)
    {
        return $user->hasPermissionTo('update pages');
    }
    
    public function delete(UserInterface $user, Meme $meme)
    {
        return $user->hasPermissionTo('create pages');
    }

    public function restore(UserInterface $user, Meme $meme)
    {
        return false;
    }

    public function forceDelete(UserInterface $user, Meme $meme)
    {
        return false;
    }
}
