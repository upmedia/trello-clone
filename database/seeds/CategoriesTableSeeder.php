<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    public function run()
    {
        $categories = ['Backlog', 'In progress', 'Done'];

            foreach ($categories as $category) {
                Category::create(['name' => $category]);
            }
    }
}
