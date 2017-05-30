<?php

namespace KKMClient\Exceptions;


use Throwable;

class NonexistentClassName extends \Exception
{
    public function __construct ( $className, $code = 0, Throwable $previous = null )
    {
        $message = $className . " not implemented yet.";
        parent::__construct($message, $code, $previous);
    }
}