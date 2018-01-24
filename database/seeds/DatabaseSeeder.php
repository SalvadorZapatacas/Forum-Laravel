<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //factory();

        DB::table('users')->insert([
            'name' => 'María Zapata Casales',
            'email' => 'maria@zapata.com',
            'password' => bcrypt(123456),
            'remember_token' => str_random(10)
        ]);

        factory(App\User::class, 9)->create()->each(
            function($user) {
                factory(App\Thread::class)->create(['user_id' => $user->id]);
            }
        );

        factory(App\Post::class,50)->create();
    }
}
