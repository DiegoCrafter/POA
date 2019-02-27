<?php

use Illuminate\Database\Seeder;
use App\Eje;

class EjeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eje = new Eje();
        $eje->eje_name = 'Enseñanza y Aprendizaje';
        $eje->save();

        $eje = new Eje();
        $eje->eje_name = 'Investigación';
        $eje->save();

        $eje = new Eje();
        $eje->eje_name = 'Extensión y Proyección Social';
        $eje->save();

        $eje = new Eje();
        $eje->eje_name = 'Desarrollo Espiritual';
        $eje->save();
    }
}
