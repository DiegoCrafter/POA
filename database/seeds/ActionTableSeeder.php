<?php

use Illuminate\Database\Seeder;
use App\Action;

class ActionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $action = new Action();
        $action->action_name = 'Numero de reconocimientos institucionales recibidos';
        $action->id_indicator= 1;
        $action->save();

        $action = new Action();
        $action->action_name = 'Evaluacion e informe de las entrevistas de las empresas con desempeño';
        $action->id_indicator= 2;
        $action->save();
    }
}
