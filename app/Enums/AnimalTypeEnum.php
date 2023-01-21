<?php

namespace App\Enums;

use App\Traits\BaseEnumTrait;

enum AnimalTypeEnum : int
{
    use BaseEnumTrait;

    case KANGAROO = 1;
}