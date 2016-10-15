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
            'class' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers') ->insert([
            'class' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers') ->insert([
            'class' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers') ->insert([
            'class' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers') ->insert([
            'class' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers') ->insert([
            'class' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers') ->insert([
            'class' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers') ->insert([
            'class' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('teachers') ->insert([
            'class' => str_random(3).'X',
            'name' => str_random(30).'_ПІБ',
            'email' => str_random(10).'@gmail.com'
        ]);
        DB::table('classList') ->insert([
            'school' => str_random(3).'A',
            'teacher' => str_random(30).'_ПІБ',
            'name' => str_random(3).'A'
        ]);
        DB::table('classList') ->insert([
            'school' => str_random(3).'A',
            'teacher' => str_random(30).'_ПІБ',
            'name' => str_random(3).'A'
        ]);
        DB::table('classList') ->insert([
            'school' => str_random(3).'A',
            'teacher' => str_random(30).'_ПІБ',
            'name' => str_random(3).'A'
        ]);
        DB::table('classList') ->insert([
            'school' => str_random(3).'A',
            'teacher' => str_random(30).'_ПІБ',
            'name' => str_random(3).'A'
        ]);
        DB::table('classList') ->insert([
            'school' => str_random(3).'A',
            'teacher' => str_random(30).'_ПІБ',
            'name' => str_random(3).'A'
        ]);
        DB::table('classList') ->insert([
            'school' => str_random(3).'A',
            'teacher' => str_random(30).'_ПІБ',
            'name' => str_random(3).'A'
        ]);
        DB::table('classList') ->insert([
            'school' => str_random(3).'A',
            'teacher' => str_random(30).'_ПІБ',
            'name' => str_random(3).'A'
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
    }
}
