<?php

namespace App\Enums;

use App\Traits\BaseEnumTrait;

enum FriendlinessEnum : int
{
    use BaseEnumTrait;

    case FRIENDLY = 1;
    case NOT_FRIENDLY = 2;
}