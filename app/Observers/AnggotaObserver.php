<?php

namespace App\Observers;

use App\Models\User;
use App\Traits\UsernameTrait;
use Spatie\Permission\Models\Role;

class AnggotaObserver
{
    use UsernameTrait;

    public function creating(User $user)
    {
        $user->user_add ?? $user->user_add = $this->username();
        $user->assignRole('Member');
    }

    public function updating(User $user)
    {
        if (request()->has(['username', 'password'])) {
            $user->syncRoles('User');
            $user->active = 1;
        }

        $user->user_update = $this->username();
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        $user->update(['user_update' => $this->username()]);
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
