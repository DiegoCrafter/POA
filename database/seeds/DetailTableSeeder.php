<?php

use Illuminate\Database\Seeder;
use App\Detail;

class DetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail = new Detail();
        $detail->detail_qt = '1';
        $detail->id_schedule = '2';
        $detail->id_action = '1';
        $detail->id_role_user = "1";
        $detail->save();

        $detail = new Detail();
        $detail->detail_qt = '2';
        $detail->id_schedule = '1';
        $detail->id_action = '2';
        $detail->id_role_user = "2";
        $detail->save();
    }
}
