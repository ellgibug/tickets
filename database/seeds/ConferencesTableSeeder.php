<?php

use Illuminate\Database\Seeder;

class ConferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conferences')->insert([
            'title' => 'Вступительная конференция',
            'place' => 'Большой зал',
            'time' => '2017-10-01 12:00:00'
        ]);

        DB::table('conferences')->insert([
            'title' => 'Международная конференция',
            'place' => 'Большой зал',
            'time' => '2017-10-02 12:00:00'
        ]);

        DB::table('conferences')->insert([
            'title' => 'Научная конференция',
            'place' => 'Открытый зал',
            'time' => '2017-10-02 15:00:00'
        ]);

        DB::table('conferences')->insert([
            'title' => 'Закрытая конференция',
            'place' => 'Малый зал',
            'time' => '2017-10-04 17:00:00'
        ]);
    }
}
