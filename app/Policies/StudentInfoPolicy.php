<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\StudentInfo;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentInfoPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:StudentInfo');
    }

    public function view(AuthUser $authUser, StudentInfo $studentInfo): bool
    {
        return $authUser->can('View:StudentInfo');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:StudentInfo');
    }

    public function update(AuthUser $authUser, StudentInfo $studentInfo): bool
    {
        return $authUser->can('Update:StudentInfo');
    }

    public function delete(AuthUser $authUser, StudentInfo $studentInfo): bool
    {
        return $authUser->can('Delete:StudentInfo');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:StudentInfo');
    }

    public function restore(AuthUser $authUser, StudentInfo $studentInfo): bool
    {
        return $authUser->can('Restore:StudentInfo');
    }

    public function forceDelete(AuthUser $authUser, StudentInfo $studentInfo): bool
    {
        return $authUser->can('ForceDelete:StudentInfo');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:StudentInfo');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:StudentInfo');
    }

    public function replicate(AuthUser $authUser, StudentInfo $studentInfo): bool
    {
        return $authUser->can('Replicate:StudentInfo');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:StudentInfo');
    }

}