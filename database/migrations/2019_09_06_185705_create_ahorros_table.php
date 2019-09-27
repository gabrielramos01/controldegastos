<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAhorrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ahorros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('monto');

            $table->integer('ingreso_id')->unsigned();
            $table->foreign('ingreso_id')->references('id')->on('ingresos')
                ->onDelete('cascade');
            $table->integer('gasto_id')->unsigned();
            $table->foreign('gasto_id')->references('id')->on('gastos')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ahorros');
    }
}
