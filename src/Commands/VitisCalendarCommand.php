<?php

namespace VitisStudio\VitisCalendar\Commands;

use Illuminate\Console\Command;

class VitisCalendarCommand extends Command
{
    public $signature = 'vitis-calendar';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
