<?php

namespace Database\Seeders;

use App\Models\CircuitsModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CircuitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CircuitsModel::create([
            'cir_id' => 1,
            "cir_cur_id" => 1,
            "cir_num" => 1,
            "cir_distancia" => 30,
            "cir_nom" => "Tiger Circuito",
            "cir_preu" => 20,
            "cir_temps_estimat" => 220,
        ]);
        CircuitsModel::create([
            'cir_id' => 2,
            "cir_cur_id" => 2,
            "cir_num" => 1,
            "cir_distancia" => 30,
            "cir_nom" => "Steel Man Circuito",
            "cir_preu" => 19,
            "cir_temps_estimat" => 225,
        ]);
    }
}
