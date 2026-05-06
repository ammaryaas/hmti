<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Seminar;
use Illuminate\Auth\Access\HandlesAuthorization;

class SeminarPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Seminar');
    }

    public function view(AuthUser $authUser, Seminar $seminar): bool
    {
        return $authUser->can('View:Seminar');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Seminar');
    }

    public function update(AuthUser $authUser, Seminar $seminar): bool
    {
        return $authUser->can('Update:Seminar');
    }

    public function delete(AuthUser $authUser, Seminar $seminar): bool
    {
        return $authUser->can('Delete:Seminar');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Seminar');
    }

    public function restore(AuthUser $authUser, Seminar $seminar): bool
    {
        return $authUser->can('Restore:Seminar');
    }

    public function forceDelete(AuthUser $authUser, Seminar $seminar): bool
    {
        return $authUser->can('ForceDelete:Seminar');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Seminar');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Seminar');
    }

    public function replicate(AuthUser $authUser, Seminar $seminar): bool
    {
        return $authUser->can('Replicate:Seminar');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Seminar');
    }

}