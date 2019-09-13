<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipogastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipogastos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_tipogasto');
            $table->string('descripcion_tipogasto');
            $table->date('fecha_tipogasto');
            $table->integer('monto_gasto');
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
        Schema::dropIfExists('tipogastos');
    }
}
