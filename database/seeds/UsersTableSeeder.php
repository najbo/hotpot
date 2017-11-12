<?php

use Illuminate\Database\Seeder;
use App\user;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 // $this->assertDatabaseMissing('users', [
      //           'email' => 'boesch@estoppey-addor.ch'
      //       ]);

    	User::create([
    		'email' => 'boesch@estoppey-addor.ch',
    		'name' => 'Jan Boesch',
    		'password' => bcrypt('123456')
    	]);
    	

        $user = factory('App\User',5)->create();
    }


}
