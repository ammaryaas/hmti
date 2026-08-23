<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Appreciation;
use Illuminate\Auth\Access\HandlesAuthorization;

class AppreciationPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Appreciation');
    }

    public function view(AuthUser $authUser, Appreciation $appreciation): bool
    {
        return $authUser->can('View:Appreciation');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Appreciation');
    }

    public function update(AuthUser $authUser, Appreciation $appreciation): bool
    {
        return $authUser->can('Update:Appreciation');
    }

    public function delete(AuthUser $authUser, Appreciation $appreciation): bool
    {
        return $authUser->can('Delete:Appreciation');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Appreciation');
    }

    public function restore(AuthUser $authUser, Appreciation $appreciation): bool
    {
        return $authUser->can('Restore:Appreciation');
    }

    public function forceDelete(AuthUser $authUser, Appreciation $appreciation): bool
    {
        return $authUser->can('ForceDelete:Appreciation');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Appreciation');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Appreciation');
    }

    public function replicate(AuthUser $authUser, Appreciation $appreciation): bool
    {
        return $authUser->can('Replicate:Appreciation');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Appreciation');
    }

}