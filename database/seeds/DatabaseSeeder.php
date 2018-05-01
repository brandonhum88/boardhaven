<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    $protected $toTruncate = ['users', 'survivors'];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->toTruncate as $table)
        {
            Model::unguard();

            DB::table($table)->truncate();
        }

        $this->call(UsersTableSeeder::class);
        $this->call(SurvivorsTableSeeder::class);
    }
}
