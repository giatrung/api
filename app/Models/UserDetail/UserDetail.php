<?php

namespace App\Models\UserDetail;

use App\Models\Contracts\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetail extends BaseModel
{
    use UserDetailRelation;
}
