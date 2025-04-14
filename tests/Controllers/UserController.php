<?php

namespace Jejookit\RestAPI\Tests\Controllers;

use Jejookit\RestAPI\ApiController;
use Jejookit\RestAPI\Tests\Models\DummyUser;

class UserController extends ApiController
{
    protected $model = DummyUser::class;
}