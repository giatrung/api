<?php

namespace App\Models\User;

use App\Models\UserDetail\UserDetail;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait UserRelation {
    /**
     * Get the phone associated with the user.
     */
    public function userDetail(): HasOne
    {
        return $this->hasOne($this->relate('UserDetail'));
    }
} 