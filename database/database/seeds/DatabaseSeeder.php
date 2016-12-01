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

//        DB::table('teachers')->insert([
//            'class_name' => str_random(3).'X',
//            'name' => str_random(30).'_ПІБ',
//            'email' => str_random(10).'@gmail.com'
//        ]);
//        DB::table('teachers')->insert([
//            'class_name' => str_random(3).'X',
//            'name' => str_random(30).'_ПІБ',
//            'email' => str_random(10).'@gmail.com'
//        ]);
//        DB::table('teachers')->insert([
//            'class_name' => str_random(3).'X',
//            'name' => str_random(30).'_ПІБ',
//            'email' => str_random(10).'@gmail.com'
//        ]);
//        DB::table('teachers')->insert([
//            'class_name' => str_random(3).'X',
//            'name' => str_random(30).'_ПІБ',
//            'email' => str_random(10).'@gmail.com'
//        ]);
//        DB::table('teachers')->insert([
//            'class_name' => str_random(3).'X',
//            'name' => str_random(30).'_ПІБ',
//            'email' => str_random(10).'@gmail.com'
//        ]);
//        DB::table('teachers')->insert([
//            'class_name' => str_random(3).'X',
//            'name' => str_random(30).'_ПІБ',
//            'email' => str_random(10).'@gmail.com'
//        ]);
//        DB::table('teachers')->insert([
//            'class_name' => str_random(3).'X',
//            'name' => str_random(30).'_ПІБ',
//            'email' => str_random(10).'@gmail.com'
//        ]);
//        DB::table('teachers')->insert([
//            'class_name' => str_random(3).'X',
//            'name' => str_random(30).'_ПІБ',
//            'email' => str_random(10).'@gmail.com'
//        ]);
//        DB::table('teachers')->insert([
//            'class_name' => str_random(3).'X',
//            'name' => str_random(30).'_ПІБ',
//            'email' => str_random(10).'@gmail.com'
//        ]);
//        DB::table('teachers_to_class')->insert([
////            'teachers_id' => 1,
////            'classes_id' => 2
//        ]);
//        DB::table('teachers_to_class')->insert([
////            'teachers_id' => 3,
////            'classes_id' => 4
//        ]);
        DB::table('roles')->insert([
            'title' => 'Admin',
            'description' => 'Admin'
        ]);
        DB::table('roles')->insert([
            'title' => 'Teacher',
            'description' => 'Teacher'
        ]);
        DB::table('roles')->insert([
            'title' => 'Student',
            'description' => 'Student'
        ]);
        DB::table('user_roles')->insert([
            'user_id' => 1,
            'role_id' => 2
        ]);
        DB::table('user_roles')->insert([
            'user_id' => 2,
            'role_id' => 1
        ]);
        DB::table('subjects')->insert([
        'title' => 'Math',
        'description' => 'Math'
    ]);
        DB::table('subjects')->insert([
            'title' => 'Language',
            'description' => 'Language'
        ]);
        DB::table('subjects')->insert([
            'title' => 'History',
            'description' => 'History'
        ]);
        DB::table('subjects')->insert([
            'title' => 'Chemistry',
            'description' => 'Chemistry'
        ]);
        DB::table('subjects')->insert([
            'title' => 'Geography',
            'description' => 'Geographyy'
        ]);
        DB::table('subjects')->insert([
            'title' => 'Literature',
            'description' => 'Literature'
        ]);

        $arr_name = ['Yulia Mysienko', 'Yulia Storozhuk', 'Nazar Kushniruk', 'Oleksandr Kushnir', 'Vasya'];
        $arr_email = ['Yulia_Mysienko', 'Yulia_Storozhuk', 'Nazar_Kushniruk', 'Oleksandr_Kushnir', 'Vasya'];
        $type = 'admin';
        for ($users = 0; $users < 5; $users++) {
            DB::table('users')->insert([
                'name' => $arr_name[$users],
                'type' => $type.'_type',
                'email' => $arr_email[$users].'@gmail.com'
            ]);
        }
        for($schools = 1; $schools < 37; $schools++) {
            DB::table('schoolList')->insert([
                'name' => str_random(3).$schools,
                'number' => $schools
            ]);
            for ($classList = 1; $classList < 12; $classList++){
                for($k = 0; $k < 3; $k++) {
                    DB::table('classLists')->insert([
                        'class_name' => str_random(1),
                        'number' => $classList,
                        'school_id' => $schools,
                    ]);
                }
            }
        }
    }
}
