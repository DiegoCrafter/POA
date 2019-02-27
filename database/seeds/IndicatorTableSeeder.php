<?php

use Illuminate\Database\Seeder;
use App\Indicator;

class IndicatorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $indicator = new Indicator();
        $indicator->indicator_code = '1.1.1';
        $indicator->indicator_name = 'Numero de reconocimientos institucionales recibidos';
        $indicator->eje_id= 1;
        $indicator->save();

        $indicator = new Indicator();
        $indicator->indicator_code = '1.1.2';
        $indicator->indicator_name = 'Numero de reconocimientos institucionales no recibidos';
        $indicator->eje_id=2;
        $indicator->save();
    }
}
