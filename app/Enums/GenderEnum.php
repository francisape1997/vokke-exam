<?php

namespace App\Enums;

use App\Traits\BaseEnumTrait;

enum GenderEnum : int
{
    use BaseEnumTrait;

    case MALE = 1;
    case FEMALE = 2;
    case OTHER = 3;
}