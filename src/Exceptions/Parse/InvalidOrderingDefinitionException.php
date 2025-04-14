<?php

namespace Jejookit\RestAPI\Exceptions\Parse;

use Jejookit\RestAPI\Exceptions\ApiException;
use Jejookit\RestAPI\Exceptions\ErrorCodes;

class InvalidOrderingDefinitionException extends ApiException
{
    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_ORDERING_INVALID;

    protected $message = "Ordering defined incorrectly";
}