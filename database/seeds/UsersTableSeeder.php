<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Пользователь Один',
            'email' => 'one@gmail.com',
            'password' => bcrypt('secret'),
            'company' => 'Комания Один',
            'position' => 'Директор',
            'check' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Пользователь Два',
            'email' => 'two@gmail.com',
            'password' => bcrypt('secret'),
            'company' => 'Комания Два',
            'position' => 'Бухгалтер',
            'check' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Пользователь Три',
            'email' => 'three@gmail.com',
            'password' => bcrypt('secret'),
            'company' => 'Комания Три',
            'position' => 'Продавец',
            'check' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Пользователь Четыре',
            'email' => 'four@gmail.com',
            'password' => bcrypt('secret'),
            'company' => 'Комания Четыре',
            'position' => 'Стажер',
            'check' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Пользователь Пять',
            'email' => 'five@gmail.com',
            'password' => bcrypt('secret'),
            'company' => 'Комания Пять',
            'position' => 'Юрист',
            'check' => 1
        ]);

    }
}
