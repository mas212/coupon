<?php

use App\Categories;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create([
        	'name' => 'laptop'
        ]);

        Categories::create([
        	'name' => 'mac'
        ]);
    }
}
