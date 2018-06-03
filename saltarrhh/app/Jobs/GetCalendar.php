<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class GetCalendar implements ShouldQueue
{
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  /**
   * Create a new job instance.
   *
   * @return void
   */
  public function __construct()
  {
    //
  }

  /**
   * Execute the job.
   *
   * @return void
   */
  public function handle()
  {
    //https://<URL>/rest/calendar-services/1.0/calendar/events.json?subCalendarId=bff40b1d-3343-4951-bb06-1ba34db413d7&userTimeZoneId=Europe%2FMadrid&start=2018-01-01T00%3A00%3A00Z&end=2018-08-08T00%3A00%3A00Z&_=1528061676192
  }
}
