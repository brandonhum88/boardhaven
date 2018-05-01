<?php

use Illuminate\Database\Seeder;

class SurvivorsTableSeeder extends Seeder
{
    public function run()
    {
        factory('\App\KDM\Survivor', 10)->create([
            'settlement_id' => 1
        ]);
    }
}
