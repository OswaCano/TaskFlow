<?php

namespace App\Enums;

enum GroupRoleEnum: int
{
    case MEMBER = 0;
    case ADMIN = 1;
    case OWNER = 2;
}
