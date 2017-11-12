<?php

use Illuminate\Database\Seeder;

class SensordatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory('App\Sensordata',5)->create();
    }
}
