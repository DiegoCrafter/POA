<?php

use Illuminate\Database\Seeder;
use App\Schedule;

class ScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedule = new Schedule();
        $schedule->schedule_year = '2019';
        $schedule->schedule_month = '01';
        $schedule->save();

        $schedule = new Schedule();
        $schedule->schedule_year = '2019';
        $schedule->schedule_month = '02';
        $schedule->save();

        $schedule = new Schedule();
        $schedule->schedule_year = '2019';
        $schedule->schedule_month = '03';
        $schedule->save();

        $schedule = new Schedule();
        $schedule->schedule_year = '2019';
        $schedule->schedule_month = '04';
        $schedule->save();
    }
}
