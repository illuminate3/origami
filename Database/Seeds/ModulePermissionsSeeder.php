<?php

namespace App\Modules\Origami\Database\Seeds;

use Illuminate\Database\Seeder;
Use DB;
use Schema;


<<<<<<< HEAD
class ModulePermissionsSeeder extends Seeder
{
=======
class ModuleSeeder extends Seeder {
>>>>>>> 10010b00dab3f7c109c50260efb27284f9b32234


	public function run()
	{

<<<<<<< HEAD
=======

>>>>>>> 10010b00dab3f7c109c50260efb27284f9b32234
// Permissions -------------------------------------------------------------
		$permissions = array(
			[
				'name'				=> 'Manage Themes',
				'slug'				=> 'manage_origami',
				'description'		=> 'Give permission to user to access the Theme Management area.'
			],
		 );

		if (Schema::hasTable('permissions'))
		{
			DB::table('permissions')->insert( $permissions );
		}

<<<<<<< HEAD
=======

>>>>>>> 10010b00dab3f7c109c50260efb27284f9b32234
	} // run


}
