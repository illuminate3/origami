<?php

namespace App\Modules\Origami\Database\Seeds;

use Illuminate\Database\Seeder;
Use DB;
use Schema;


class ModuleSeeder extends Seeder {


	public function run()
	{


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


// Links -------------------------------------------------------------------
		$link_names = array([
			'menu_id'				=> 1, // admin menu
			'position'				=> 7,
		]);

		$last_insert_id = DB::getPdo()->lastInsertId();
		$locale_id = DB::table('locales')
			->where('name', '=', 'English')
			->where('locale', '=', 'en', 'AND')
			->pluck('id');

		$ink_name_trans = array([
			'status'				=> 1,
			'title'					=> 'Themes',
			'url'					=> '/admin/themes',
			'menulink_id'			=> $last_insert_id,
			'locale_id'				=> $locale_id // English ID
		]);

// Insert Permissions
		if (Schema::hasTable('menulinks'))
		{

// Create Link
		DB::table('menulinks')->insert( $link_names );
// Create Link Translation
		DB::table('menulink_translations')->insert( $ink_name_trans );

		}


	} // run


}
