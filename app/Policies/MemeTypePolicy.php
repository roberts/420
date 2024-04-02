<?php

namespace App\Policies;

use App\Models\MemeType;
use Illuminate\Auth\Access\HandlesAuthorization;
use Tipoff\Support\Contracts\Models\UserInterface;

class MemeTypePolicy
{
    use HandlesAuthorization;

    public function viewAny(UserInterface $user)
    {
        return $user->hasPermissionTo('view pages');
    }

    public function view(UserInterface $user, MemeType $memeType)
    {
        return $user->hasPermissionTo('view pages');
    }

    public function create(UserInterface $user)
    {
        return $user->hasPermissionTo('create pages');
    }

    public function update(UserInterface $user, MemeType $memeType)
    {
        return $user->hasPermissionTo('update pages');
    }
    
    public function delete(UserInterface $user, MemeType $memeType)
    {
        return $user->hasPermissionTo('create pages');
    }

    public function restore(UserInterface $user, MemeType $memeType)
    {
        return false;
    }

    public function forceDelete(UserInterface $user, MemeType $memeType)
    {
        return false;
    }
}
