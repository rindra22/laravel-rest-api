<?php

namespace Jejookit\RestAPI\Exceptions\Parse;

use Jejookit\RestAPI\Exceptions\ApiException;
use Jejookit\RestAPI\Exceptions\ErrorCodes;

class InvalidFilterDefinitionException extends ApiException
{

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_INVALID_FILTER_DEFINITION;

    protected $message = "Filter defined incorrectly";

}