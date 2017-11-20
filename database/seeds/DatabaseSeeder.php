<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *  @return void
     */
    public function run()
    {
        factory(App\category::class, 10)->create();
        factory(App\product::class, 200)->create();
        factory(App\price::class, 200)->create();
    }
}
