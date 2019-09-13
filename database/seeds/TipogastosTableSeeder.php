<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipogastosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipogastos')->insert([
            'nombre_tipogasto' => Str::random(10),
            'descripcion_tipogasto' => Str::random(100),
            'fecha_tipogasto'=> date('Y-m-d'),
            'monto_gasto' => Int::random(4),
        //
    }
}
