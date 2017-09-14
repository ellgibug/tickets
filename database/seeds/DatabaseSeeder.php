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
         $this->call(AdminsTableSeeder::class);
         $this->call(ConferencesTableSeeder::class);
         $this->call(SpeakersTableSeeder::class);
         $this->call(TicketsTableSeeder::class);
         $this->call(UsersTableSeeder::class);
    }
}
