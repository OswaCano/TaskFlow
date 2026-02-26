<?php

namespace App\Enums;

enum EventParticipantRoleEnum: int
{
    case PENDING = 0;
    case APPROVED = 1;
    case REJECTED = 2;
}
