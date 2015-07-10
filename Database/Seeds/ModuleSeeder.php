<?php

namespace App\Modules\Origami\Database\Seeds;

use Illuminate\Database\Seeder;
Use DB;
use Schema;


class ModuleSeeder extends Seeder {


	public function run()
	{

// Module Information
// 		$module = array(
// 			'name'					=> 'Origami',
// 			'slug'					=> 'origami',
// 			'version'				=> '1.0',
// 			'description'			=> 'Origami is a Rakko module that provides simple Theme Managent ability',
// 			'enabled'				=> 1,
// 			'order'					=> 0
// 		);
//
// // Insert Module Information
// 		if (Schema::hasTable('modules'))
// 		{
//
// 			DB::table('modules')->insert( $module );
//
// 		}

// Permission Information
		$permissions = array(
			[
				'name'				=> 'Manage Themes',
				'slug'				=> 'manage_origami',
				'description'		=> 'Give permission to user to access the Theme Management area.'
			],
		 );

// Insert Permissions
		DB::table('permissions')->insert( $permissions );


	} // run


}
