<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 19)->create();
        App\User::create([
        	'name' => 'Wilfredo Huancollo',
        	'email' => 'wilfredo_sj@hotmail.com',
			'password' => bcrypt('THU60H4N')
        ]);
    }
}
