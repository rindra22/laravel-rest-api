<?php

namespace Jejookit\RestAPI\Tests\Controllers;

use Jejookit\RestAPI\ApiController;
use Jejookit\RestAPI\Tests\Models\DummyPost;

class PostController extends ApiController
{
    protected $model = DummyPost::class;
}