<?php

namespace Database\Seeders;

use App\Models\item_categories;
use Illuminate\Database\Seeder;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        item_categories::create(['category' => 'drinks', 'category_shorthand' => 'dr']);
        item_categories::create(['category' => 'snacks', 'category_shorthand' => 'sn']);
        item_categories::create(['category' => 'main', 'category_shorthand' => 'mn']);
        item_categories::create(['category' => 'appetizer', 'category_shorthand' => 'ap']);
    }
}
