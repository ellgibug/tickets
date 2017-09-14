<?php

use Illuminate\Database\Seeder;

class SpeakersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('speakers')->insert([
            'name' => 'Спикер Один',
            'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.',
        ]);

        DB::table('speakers')->insert([
            'name' => 'Спикер Два',
            'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.',
        ]);

        DB::table('speakers')->insert([
            'name' => 'Спикер Три',
            'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.',
        ]);

        DB::table('speakers')->insert([
            'name' => 'Спикер Четыре',
            'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.',
        ]);

        DB::table('speakers')->insert([
            'name' => 'Спикер Пять',
            'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.',
        ]);

        DB::table('speakers')->insert([
            'name' => 'Спикер Шесть',
            'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.',
        ]);

        DB::table('speakers')->insert([
            'name' => 'Спикер Семь',
            'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.',
        ]);

        DB::table('speakers')->insert([
            'name' => 'Спикер Восемь',
            'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.',
        ]);

        DB::table('speakers')->insert([
            'name' => 'Спикер Девять',
            'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.',
        ]);

        DB::table('speakers')->insert([
            'name' => 'Спикер Десять',
            'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.',
        ]);
    }
}
