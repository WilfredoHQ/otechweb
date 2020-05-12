<?php

use Illuminate\Database\Seeder;

class CollaboratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Collaborator::class, 5)->create();
    }
}
