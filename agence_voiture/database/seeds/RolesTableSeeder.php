<?php

use Illuminate\Database\Seeder;
use App\Modules\User\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create([
        	'role'=>'Admin',
        ]);
        Role::create([
        	'role'=>'Agent',
        ]);
        Role::create([
        	'role'=>'Client',
        ]);
    }
}
