<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\DataCenter;
use Illuminate\Auth\Access\HandlesAuthorization;

class DataCenterPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:DataCenter');
    }

    public function view(AuthUser $authUser, DataCenter $dataCenter): bool
    {
        return $authUser->can('View:DataCenter');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:DataCenter');
    }

    public function update(AuthUser $authUser, DataCenter $dataCenter): bool
    {
        return $authUser->can('Update:DataCenter');
    }

    public function delete(AuthUser $authUser, DataCenter $dataCenter): bool
    {
        return $authUser->can('Delete:DataCenter');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:DataCenter');
    }

    public function restore(AuthUser $authUser, DataCenter $dataCenter): bool
    {
        return $authUser->can('Restore:DataCenter');
    }

    public function forceDelete(AuthUser $authUser, DataCenter $dataCenter): bool
    {
        return $authUser->can('ForceDelete:DataCenter');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:DataCenter');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:DataCenter');
    }

    public function replicate(AuthUser $authUser, DataCenter $dataCenter): bool
    {
        return $authUser->can('Replicate:DataCenter');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:DataCenter');
    }

}