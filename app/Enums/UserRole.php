<?php

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'admin';
    case TicketSeller = 'ticket seller';
    case Driver = 'driver';
    case Customer = 'customer';

    public static function display(string $role)
    {
        return ucwords($role);
    }
}
