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
//          $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => str_random(10),
            'type' => str_random(3).'_type',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'type' => str_random(3).'_type',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'type' => str_random(3).'_type',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'type' => str_random(3).'_type',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'type' => str_random(3).'_type',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'type' => str_random(3).'_type',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('Timetable')->insert([
            'subject' => str_random(10).'_subject',
            'home_task' => str_random(3).'_task',
            'variable' => str_random(2)
        ]);
        DB::table('Timetable')->insert([
            'subject' => str_random(10).'_subject',
            'home_task' => str_random(3).'_task',
            'variable' => str_random(2)
        ]);
        DB::table('Timetable')->insert([
            'subject' => str_random(10).'_subject',
            'home_task' => str_random(3).'_task',
            'variable' => str_random(2)
        ]);
        DB::table('Timetable')->insert([
            'subject' => str_random(10).'_subject',
            'home_task' => str_random(3).'_task',
            'variable' => str_random(2)
        ]);
        DB::table('Timetable')->insert([
            'subject' => str_random(10).'_subject',
            'home_task' => str_random(3).'_task',
            'variable' => str_random(2),
        ]);
        DB::table('Timetable')->insert([
            'subject' => str_random(10).'_subject',
            'home_task' => str_random(3).'_task',
            'variable' => str_random(2)
        ]);
        DB::table('Timetable')->insert([
            'subject' => str_random(10).'_subject',
            'home_task' => str_random(3).'_task',
            'variable' => str_random(2)
        ]);
        DB::table('Timetable')->insert([
            'subject' => str_random(10).'_subject',
            'home_task' => str_random(3).'_task',
            'variable' => str_random(2)

        ]);
    }
}
