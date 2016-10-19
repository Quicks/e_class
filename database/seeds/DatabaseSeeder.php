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
        DB::table('teachers') ->insert([
            'class_name' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers') ->insert([
            'class_name' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers') ->insert([
            'class_name' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers') ->insert([
            'class_name' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers') ->insert([
            'class_name' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers') ->insert([
            'class_name' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers') ->insert([
            'class_name' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers') ->insert([
            'class_name' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers') ->insert([
            'class_name' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('classList') ->insert([
            'name' => str_random(3).'A',
            'school' => str_random(3).'A',
            'teacher' => str_random(30).'_ПІБ'
        ]);
        DB::table('classList') ->insert([
            'name' => str_random(3).'A',
            'school' => str_random(3).'A',
            'teacher' => str_random(30).'_ПІБ'
        ]);
        DB::table('classList') ->insert([
            'name' => str_random(3).'A',
            'school' => str_random(3).'A',
            'teacher' => str_random(30).'_ПІБ'
        ]);
        DB::table('classList') ->insert([
            'name' => str_random(3).'A',
            'school' => str_random(3).'A',
            'teacher' => str_random(30).'_ПІБ'
        ]);
        DB::table('classList') ->insert([
            'name' => str_random(3).'A',
            'school' => str_random(3).'A',
            'teacher' => str_random(30).'_ПІБ'
        ]);
        DB::table('classList') ->insert([
            'name' => str_random(3).'A',
            'school' => str_random(3).'A',
            'teacher' => str_random(30).'_ПІБ'
        ]);
        DB::table('classList') ->insert([
            'name' => str_random(3).'A',
            'school' => str_random(3).'A',
            'teacher' => str_random(30).'_ПІБ'
        ]);
        DB::table('schoolList') ->insert([
            'number' =>  str_random(3).'A',
            'name' => str_random(20).'school_name'
        ]);
        DB::table('schoolList') ->insert([
            'number' =>  str_random(3).'A',
            'name' => str_random(20).'school_name'
        ]);
        DB::table('schoolList') ->insert([
            'number' =>  str_random(3).'A',
            'name' => str_random(20).'school_name'
        ]);
        DB::table('schoolList') ->insert([
            'number' =>  str_random(3).'A',
            'name' => str_random(20).'school_name'
        ]);
        DB::table('schoolList') ->insert([
            'number' =>  str_random(3).'A',
            'name' => str_random(20).'school_name'
        ]);
        DB::table('schoolList') ->insert([
            'number' =>  str_random(3).'A',
            'name' => str_random(20).'school_name'
        ]);
        DB::table('schoolList') ->insert([
            'number' =>  str_random(3).'A',
            'name' => str_random(20).'school_name'
        ]);
        DB::table('teachers_to_class') ->insert([
            'id_teachers' => 1,
            'id_classes' => 1
        ]);
        DB::table('teachers_to_class') ->insert([
            'id_teachers' => 1,
            'id_classes' => 2
        ]);

    }
}
