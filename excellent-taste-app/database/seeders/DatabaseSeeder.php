<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(UserroleSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(TableSeeder::class);
        $this->call(ItemCategorySeeder::class);
        $this->call(ItemSubcategorySeeder::class);
        $this->call(ItemSeeder::class);

        $this->call(ReservationSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderitemsSeeder::class);
    }
}
