<?php

use Illuminate\Database\Seeder;
use App\User;


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
      //           'email' => 'boesch@example.org'
      //       ]);

    	User::create([
    		'email' => 'boesch@example.org',
    		'name' => 'Jan Boesch',
    		'password' => bcrypt('123456')
    	]);
    	

        $user = factory('App\User',5)->create();
    }


}
