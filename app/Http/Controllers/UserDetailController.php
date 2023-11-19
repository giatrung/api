<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Contracts\CRUDController;
class UserDetailController extends CRUDController
{
    protected $name = 'UserDetail';
}
