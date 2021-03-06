<?php

namespace Kbdxbt\LaravelRepository\Exceptions;

use RuntimeException;
use Throwable;

class ResourceException extends RuntimeException
{
    /**
     * ResourceException constructor.
     *
     * @param string $message
     */
    public function __construct($message = '', $code = 0, Throwable $previous = null)
    {
        $code = is_int($code) ? $code : 0;
        parent::__construct($message, $code, $previous);
    }
}
