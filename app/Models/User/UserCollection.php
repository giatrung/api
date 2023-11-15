<?php
namespace App\Models\User;

use App\Models\Contracts\BaseCollection;

class UserCollection extends BaseCollection
{
    /**
     * このリソースを収集するリソース
     *
     * @var string
     */
    public $collects = 'App\Models\User\UserResource';
}

