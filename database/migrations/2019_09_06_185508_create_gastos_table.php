<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastos', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->integer('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas')
                ->onDelete('cascade');
            $table->integer('tipogasto_id')->unsigned();
            $table->foreign('tipogasto_id')->references('id')->on('tipogastos')
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
        Schema::dropIfExists('gastos');
    }
}
