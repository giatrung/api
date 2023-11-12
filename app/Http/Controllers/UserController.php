<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Contracts\CRUDController;
class UserController extends CRUDController
{
    protected $name = 'User';
}
