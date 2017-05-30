<?php

namespace KKMClient\Models\Queries\Commands;


use KKMClient\Traits\CommonCommandTrait;
use KKMClient\Interfaces\CommandInterface;

class GetLineLength implements CommandInterface
{
    use CommonCommandTrait;

    public function getName() : string
    {
        return "GetLineLength";
    }
}