<?php

namespace KKMClient\Exceptions;


use KKMClient\Interfaces\CommandInterface;
use Throwable;

class UnknownKKMCommand extends \Exception
{
    public function __construct ( CommandInterface $command, $code = 0, Throwable $previous = null)
    {
        if ($command->getName())
            $message = "Command {$command->getName()} not implemented or not supported by KKMServer";
        else
            $message = "Command name can not be empty!";
        parent::__construct($message, $code, $previous);
    }
}