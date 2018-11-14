<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User ::create( [
			'name'              => 'useris',
			'password'          => bcrypt('useris'),
			'role'              => 'user',
			'email'              => 'useris@useris.lt',
		] );

        User ::create( [
			'name'              => 'adminas',
			'password'          => bcrypt('adminas'),
			'role'              => 'admin',
			'email'              => 'admin@admin.lt',
		] );
    }
}
