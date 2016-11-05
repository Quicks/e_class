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
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'type' => str_random(3).'_type',
            'email' => str_random(10).'@gmail.com',
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'type' => str_random(3).'_type',
            'email' => str_random(10).'@gmail.com',
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'type' => str_random(3).'_type',
            'email' => str_random(10).'@gmail.com',
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'type' => str_random(3).'_type',
            'email' => str_random(10).'@gmail.com',
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'type' => str_random(3).'_type',
            'email' => str_random(10).'@gmail.com',
        ]);
        DB::table('teachers')->insert([
            'class_name' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers')->insert([
            'class_name' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers')->insert([
            'class_name' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers')->insert([
            'class_name' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers')->insert([
            'class_name' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers')->insert([
            'class_name' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers')->insert([
            'class_name' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers')->insert([
            'class_name' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers')->insert([
            'class_name' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers_to_class')->insert([
//            'teachers_id' => 1,
//            'classes_id' => 2
        ]);
        DB::table('teachers_to_class')->insert([
//            'teachers_id' => 3,
//            'classes_id' => 4
        ]);
        DB::table('timetables')->insert([
            'day' => 'monday',
            'number' => 1
        ]);
        DB::table('timetables')->insert([
            'day' => 'tuesday',
            'number' => 2
        ]);
        DB::table('timetables')->insert([
            'day' => 'wednesday',
            'number' => 3
        ]);
        DB::table('timetables')->insert([
            'day' => "thursday",
            'number' => 4
        ]);
        DB::table('timetables')->insert([
            'day' => 'friday',
            'number' => 5
        ]);
        DB::table('times')->insert([
            'time' => '8.30 - 9.15',
        ]);
        DB::table('times')->insert([
            'time' => '9.25 - 10.10',
        ]);
        DB::table('times')->insert([
            'time' => '10.20 - 11.05',
        ]);
        DB::table('times')->insert([
            'time' => '11.25 - 12.10',
        ]);
        DB::table('times')->insert([
            'time' => '12.20 - 13.05',
        ]);
        DB::table('times')->insert([
            'time' => '13.15 - 14.00',
        ]);
        DB::table('subjects')->insert([
            'subject' => 'math',
        ]);
        DB::table('subjects')->insert([
            'subject' => 'language',
        ]);
        DB::table('subjects')->insert([
            'subject' => 'english',
        ]);
        DB::table('subjects')->insert([
            'subject' => 'painting',
        ]);
        DB::table('subjects')->insert([
            'subject' => 'geometry',
        ]);
        DB::table('subjects')->insert([
            'subject' => 'music',
        ]);
        DB::table('subjects')->insert([
            'subject' => 'math',
        ]);
        DB::table('subjects')->insert([
            'subject' => 'math',
        ]);
        DB::table('classrooms')->insert([
            'number' => 54,
        ]);
        DB::table('classrooms')->insert([
            'number' => 45,
        ]);
        DB::table('classrooms')->insert([
            'number' => 48,
        ]);
        DB::table('classrooms')->insert([
            'number' => 42,
        ]);
        DB::table('classrooms')->insert([
            'number' => 17,
        ]);
        DB::table('classrooms')->insert([
            'number' => 19,
        ]);
    }
}
