<?php

use Illuminate\Database\Seeder;

class carTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\car::class, 50)->create()->each(function ($car) {
            //$u->posts()->save(factory(App\Post::class)->make());
        });
    }
}
