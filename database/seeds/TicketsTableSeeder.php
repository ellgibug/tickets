<?php

use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            'conference_id' => 1,
            'price' => 50
        ]);

        DB::table('tickets')->insert([
            'conference_id' => 2,
            'price' => 100
        ]);

        DB::table('tickets')->insert([
            'conference_id' => 3,
            'price' => 100
        ]);

        DB::table('tickets')->insert([
            'conference_id' => 4,
            'price' => 150
        ]);

        DB::table('tickets')->insert([
            'conference_id' => 1,
            'price' => 500
        ]);

        DB::table('tickets')->insert([
            'conference_id' => 2,
            'price' => 1000
        ]);

        DB::table('tickets')->insert([
            'conference_id' => 3,
            'price' => 1000
        ]);

        DB::table('tickets')->insert([
            'conference_id' => 4,
            'price' => 1500
        ]);

    }
}
