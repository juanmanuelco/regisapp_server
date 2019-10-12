<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BATERIA extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bateria', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTimeTz('fecha_hora')->nullable();
            $table->integer('nivel');
            $table->text('dispositivo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema:: dropIfExists('bateria');
    }
}
