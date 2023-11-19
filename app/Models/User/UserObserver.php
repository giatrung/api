<?php

namespace App\Models\User;

use App\Models\Contracts\BaseObserver;

class UserObserver extends BaseObserver
{
    /**
     * Handle the model "created" event.
     */
    public function created($model)
    {
        return parent::created($model);
    }

    /**
     * Handle the model "updated" event.
     */
    public function updated($model): void
    {
        //
    }

    /**
     * Handle the model "deleted" event.
     */
    public function deleted($model): void
    {
        //
    }

    /**
     * Handle the model "restored" event.
     */
    public function restored($model): void
    {
        //
    }

    /**
     * Handle the model "force deleted" event.
     */
    public function forceDeleted($model): void
    {
        //
    }
}
