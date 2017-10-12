<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create()->each(function ($u) {
            $u->posts()->save(factory(Post::class)->make());
        });

        factory(User::class, 'administrador', 1)->create();
    }
}
