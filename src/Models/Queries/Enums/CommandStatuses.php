<?php

namespace KKMClient\Models\Queries\Enums;


class CommandStatuses
{
    const OK        = 0;
    CONST RUNNING   = 1;
    const ERROR     = 2;
    const NOT_FOUND = 3;
    const WAITING   = 4;
}