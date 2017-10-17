<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\User::class, 20)->create()->each(function ($u) {
            $u->posts()->save(factory(App\Post::class)->make());
        });

      //  factory(App\User::class, 10)->create();
    /*
        for($i =0; $i<50; $i++) {
            DB::table('users')->insert([
                'name' => str_random(10),
                'surname' => str_random(10) . 'ic',

            ]);
        };
    */

    }
}
