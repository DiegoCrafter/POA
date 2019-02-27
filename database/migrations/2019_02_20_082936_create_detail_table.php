<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('detail_qt');
            $table->integer('id_schedule')->unsigned();
            $table->integer('id_action')->unsigned();
            $table->integer('id_role_user')->unsigned();

            $table->foreign('id_schedule')->references('id')->on('schedules')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('id_action')->references('id')->on('actions')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('id_role_user')->references('id')->on('role_user')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
