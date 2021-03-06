<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InsertAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = array(
            'username' => 'administrator',
            'email' => 'admin@sharedmusic.it',
            'password' => '$2y$10$3LathfKQzKZ0ggb8dEh1AOCgncIVYbw8gNBHO4cVvE8TQ4o/hqx/6',
            'email_verified_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );

        DB::table('users')->insert($user);
    }
}
