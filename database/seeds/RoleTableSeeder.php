<?php
use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name = 'admin';
        $admin->display_name = 'User Administrator'; // optional
        $admin->description = 'User is allowed to manage and edit other users'; // optional
        $admin->save();

        $owner = new Role();
        $owner->name         = 'user';
        $owner->display_name = 'User'; // optional
        $owner->description  = 'User of a given project'; // optional
        $owner->save();
        $permissions = Permission::pluck('id');
        foreach ($permissions as $permission) {
            $admin->attachPermission($permission);
        }
    }
}