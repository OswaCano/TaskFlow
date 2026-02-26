<?php

namespace App\Enums;

enum EventStatusEnum: int
{
    case PENDING = 0;
    case CONFIRMED = 1;
    case CANCELED = 2;

}
