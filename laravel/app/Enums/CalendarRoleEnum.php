<?php

namespace App\Enums;

enum CalendarRoleEnum: int
{
    case VIEWER = 0;
    case EDITOR = 1;
    case OWNER = 2;

    // Function label is in case we need to show what role the user has
    public function label(): string
    {
        return match ($this) {
            self::VIEWER => 'Viewer',
            self::EDITOR => 'Editor',
            self::OWNER => 'Owner',
        };
    }
}
