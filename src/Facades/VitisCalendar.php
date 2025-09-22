<?php

namespace VitisStudio\VitisCalendar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VitisStudio\VitisCalendar\VitisCalendar
 */
class VitisCalendar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \VitisStudio\VitisCalendar\VitisCalendar::class;
    }
}
