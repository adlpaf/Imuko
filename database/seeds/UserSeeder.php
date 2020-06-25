<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin.itoeste@admin.com';
        $user->password = bcrypt('123456789');
        $user->save();

        $user = new User();
        $user->name = 'Manager';
        $user->email = 'manager.itoeste@manager.com';
        $user->password = bcrypt('12345678');
        $user->save();

        $user = new User();
        $user->name = 'Propietario';
        $user->email = 'owner.itoeste@owner.com';
        $user->password = bcrypt('1234567');
        $user->save();

        $user = new User();
        $user->name = 'Inquilino';
        $user->email = 'tenant.itoeste@tenant.com';
        $user->password = bcrypt('123456');
        $user->save();

    }
}
