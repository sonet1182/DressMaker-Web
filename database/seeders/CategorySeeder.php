<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'parent_id' => 0,
            'name' => "Mens' Fashion",
        ]);
        Category::create([
            'parent_id' => 0,
            'name' => "Woens' Fashion",
        ]);
        Category::create([
            'parent_id' => 0,
            'name' => "Kids' Fashion",
        ]);
    }
}
