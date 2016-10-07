<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder {

	/**
	 * Run the database seeding.
	 *
	 * @return void
	 */
	public function run() {
//        \DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		//        \DB::table('categories')->truncate();
		//        \DB::statement('SET FOREIGN_KEY_CHECKS = 1');

		DB::table('categories')->insert([
			[
				'title' => 'The Grace Company',
				'slug' => Str::slug('the-grace-company'),
				'section_id' => 1,
				'meta_description' => NULL,
				// 'name' => 'The Grace Company',
				'lang' => 'en'],
			[
				'title' => 'Hand Quilting',
				'slug' => Str::slug('hand-quilting'),
				'section_id' => 2,
				'meta_description' => NULL,
				// 'name' => 'Hand Quilting',
				'lang' => 'en'],
			[
				'title' => 'Machine Quilting',
				'slug' => Str::slug('machine-quilting'),
				'section_id' => 3,
				'meta_description' => NULL,
				// 'name' => 'Machine Quilting',
				'lang' => 'en'],

			[
				'title' => 'Qnique  Machines',
				'slug' => Str::slug('qnique-machines'),
				'section_id' => 7,
				'meta_description' => NULL,
				// 'name' => 'Qnique Machines',
				'lang' => 'en'],
			//8
			[
				'title' => 'Quilting Hoop',
				'slug' => Str::slug('quilting-hoop'),
				'section_id' => 4,
				'meta_description' => NULL,
				// 'name' => 'Quilting Hoop',
				'lang' => 'en'],
			[
				'title' => 'Lap Hoops',
				'slug' => Str::slug('lap-hoops'),
				'section_id' => 4,
				'meta_description' => NULL,
				// 'name' => 'Lap Hoops',
				'lang' => 'en'],
			[
				'title' => 'Machine Quilting Frames',
				'slug' => Str::slug('machine-quilting-frames'),
				'section_id' => 6,
				'meta_description' => NULL,
				// 'name' => 'Quilting Frames',
				'lang' => 'en'],
			[
				'title' => 'Hand Quilting Frames',
				'slug' => Str::slug('hand-quilting-frames'),
				'section_id' => 5,
				'meta_description' => NULL,
				// 'name' => 'Quilting Frames',
				'lang' => 'en'],
			[
				'title' => 'Quilting Accessories',
				'slug' => Str::slug('quilting-accessories'),
				'section_id' => 8,
				'meta_description' => NULL,
				// 'name' => 'Quilting Accessories',
				'lang' => 'en'],
			[
				'title' => 'Machine Frame Accessories',
				'slug' => Str::slug('machine-frame-accessories'),
				'section_id' => 9,
				'meta_description' => NULL,
				// 'name' => 'Machine Frame Accessories',
				'lang' => 'en'],
			[
				'title' => 'Hand Frame Accessories',
				'slug' => Str::slug('hand-frame-accessories'),
				'section_id' => 10,
				'meta_description' => NULL,
				// 'name' => 'Hand Frame Accessories',
				'lang' => 'en'],
			[
				'title' => 'Hoop Accessories',
				'slug' => Str::slug('hoop-accessories'),
				'section_id' => 11,
				'meta_description' => NULL,
				// 'name' => 'Hoop Accessories',
				'lang' => 'en'],
		]);
	}

}
