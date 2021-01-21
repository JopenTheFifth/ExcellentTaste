<?php

namespace Database\Seeders;

use App\Models\Userrole;
use Illuminate\Database\Seeder;

class UserroleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Userrole::create(['role' => 'Administrator']);
        Userrole::create(['role' => 'Staff']);
    }
}
