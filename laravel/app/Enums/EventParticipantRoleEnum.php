<?php

namespace App\Enums;

enum EventParticipantRoleEnum: int
{
    case GUEST = 0;
    case EDITOR = 1;
    case CREATOR = 2;
}
