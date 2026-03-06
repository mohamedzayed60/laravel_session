<?php

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Schedule::command('notification:send')
//     ->everySecond();
app(Schedule::class)->command('notification:send')
->everySecond()->sendOutputTo(storage_path("logs/notification.log"));