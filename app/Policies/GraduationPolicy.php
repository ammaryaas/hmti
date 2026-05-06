<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Graduation;
use Illuminate\Auth\Access\HandlesAuthorization;

class GraduationPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Graduation');
    }

    public function view(AuthUser $authUser, Graduation $graduation): bool
    {
        return $authUser->can('View:Graduation');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Graduation');
    }

    public function update(AuthUser $authUser, Graduation $graduation): bool
    {
        return $authUser->can('Update:Graduation');
    }

    public function delete(AuthUser $authUser, Graduation $graduation): bool
    {
        return $authUser->can('Delete:Graduation');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Graduation');
    }

    public function restore(AuthUser $authUser, Graduation $graduation): bool
    {
        return $authUser->can('Restore:Graduation');
    }

    public function forceDelete(AuthUser $authUser, Graduation $graduation): bool
    {
        return $authUser->can('ForceDelete:Graduation');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Graduation');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Graduation');
    }

    public function replicate(AuthUser $authUser, Graduation $graduation): bool
    {
        return $authUser->can('Replicate:Graduation');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Graduation');
    }

}