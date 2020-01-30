<?php

namespace Kbdxbt\LaravelRepository\Exceptions;

use Throwable;

/**
 * Class ResourceDeleteException.
 */
class ResourceDeleteException extends ResourceException
{
    /**
     * ResourceDeleteException constructor.
     *
     * @param string $message
     */
    public function __construct($message = 'resource delete fail', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
