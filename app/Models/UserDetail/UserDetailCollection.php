<?php

namespace App\Models\UserDetail;

use App\Models\Contracts\BaseCollection;

class UserDetailCollection extends BaseCollection
{
    /**
     * このリソースを収集するリソース
     *
     * @var string
     */
    public $collects = 'App\Models\UserDetail\UserDetailResource';
}

