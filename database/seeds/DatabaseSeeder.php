<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EjeTableSeeder::class);
        $this->call(IndicatorTableSeeder::class);
        $this->call(ActionTableSeeder::class);
        $this->call(ScheduleTableSeeder::class);
        $this->call(DocumentTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(DetailTableSeeder::class);
    }
}
