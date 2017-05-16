<?php
/**
 * Created by PhpStorm.
 * User: zeroabe
 * Date: 16.05.17
 * Time: 12:15
 */

namespace KKMClient\Queries\Enums;


class CommandStatuses
{
    const OK        = 0;
    CONST RUNNING   = 1;
    const ERROR     = 2;
    const NOT_FOUND = 3;
    const WAITING   = 4;
}