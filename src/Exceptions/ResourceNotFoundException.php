<?php

namespace Kbdxbt\LaravelRepository\Exceptions;

use Throwable;

/**
 * Class ResourceNotFoundException.
 */
class ResourceNotFoundException extends ResourceException
{
    /**
     * ResourceNotFoundException constructor.
     *
     * @param string $message
     */
    public function __construct($message = 'resource not found', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
