<?php

namespace App\Exceptions;

use Exception;

class HttpUnauthorizedException extends Exception
{
    public function __construct($message = '401 Unauthorized', $code = '401')
    {
        parent::__construct($message, $code);
    }
}
