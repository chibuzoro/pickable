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
         $this->call(iPSDevTestSeeder::class);
         $this->call(InsoftTagsSeeder::class);
         $this->call(UserTableSeeder::class);
    }
}
