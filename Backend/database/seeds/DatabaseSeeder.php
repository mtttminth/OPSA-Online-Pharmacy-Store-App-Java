<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class,10)->create();
        factory(App\Product::class,100)->create();
        factory(App\Post::class,100)->create();
		factory(App\OrderItems::class,100)->create();
		factory(App\Item::class,100)->create();
		factory(App\User::class,100)->create();
    }
}
