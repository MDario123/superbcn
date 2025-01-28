<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Schedule::command('backup:clean')->daily()->at('01:00')->onFailure(function () {
    // TODO: Notify the team... Scream of the top of your lungs! Something is horribly wrong! It MUST be fixed ASAP!
});
Schedule::command('backup:run')->daily()->at('01:30')->onFailure(function () {
    // TODO: Notify the team... Scream of the top of your lungs! Something is horribly wrong! It MUST be fixed ASAP!
});
