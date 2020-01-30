<?php

namespace Kbdxbt\LaravelRepository\Exceptions;

use Throwable;

/**
 * Class ResourceUpdateException.
 */
class ResourceUpdateException extends ResourceException
{
    /**
     * ResourceUpdateException constructor.
     *
     * @param string $message
     */
    public function __construct($message = 'resource update fail', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
