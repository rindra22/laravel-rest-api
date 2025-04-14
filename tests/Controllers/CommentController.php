<?php

namespace Jejookit\RestAPI\Tests\Controllers;

use Jejookit\RestAPI\ApiController;
use Jejookit\RestAPI\Tests\Models\DummyComment;

class CommentController extends ApiController
{
    protected $model = DummyComment::class;
}