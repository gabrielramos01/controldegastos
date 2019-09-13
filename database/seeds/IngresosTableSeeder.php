<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngresosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingresos')->insert([
            'nombre_ingreso' => Str::random(10),
            'descripcion_ingreso' => Str::random(100),
            'fecha_ingreso'=> date('Y-m-d'),
            'monto_ingreso' => Int::random(4),
        //
    }
}
