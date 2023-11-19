<?php

namespace App\Models\UserDetail;

use Illuminate\Database\Eloquent\Relations\BelongTo;

trait UserDetailRelation {
    /**
     * Get the phone associated with the user.
     */
    public function user(): BelongTo
    {
        return $this->belongTo(User::class);
    }
} 