<?php

namespace Jejookit\RestAPI\Exceptions\Parse;

use Jejookit\RestAPI\Exceptions\ApiException;
use Jejookit\RestAPI\Exceptions\ErrorCodes;

class InvalidLimitException extends ApiException
{
    protected $statusCode = 422;

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innercode = ErrorCodes::INNER_INVALID_LIMIT;

    protected $message = "Limit cannot be negative or zero";
}