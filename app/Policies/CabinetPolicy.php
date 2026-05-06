<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Cabinet;
use Illuminate\Auth\Access\HandlesAuthorization;

class CabinetPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Cabinet');
    }

    public function view(AuthUser $authUser, Cabinet $cabinet): bool
    {
        return $authUser->can('View:Cabinet');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Cabinet');
    }

    public function update(AuthUser $authUser, Cabinet $cabinet): bool
    {
        return $authUser->can('Update:Cabinet');
    }

    public function delete(AuthUser $authUser, Cabinet $cabinet): bool
    {
        return $authUser->can('Delete:Cabinet');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Cabinet');
    }

    public function restore(AuthUser $authUser, Cabinet $cabinet): bool
    {
        return $authUser->can('Restore:Cabinet');
    }

    public function forceDelete(AuthUser $authUser, Cabinet $cabinet): bool
    {
        return $authUser->can('ForceDelete:Cabinet');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Cabinet');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Cabinet');
    }

    public function replicate(AuthUser $authUser, Cabinet $cabinet): bool
    {
        return $authUser->can('Replicate:Cabinet');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Cabinet');
    }

}