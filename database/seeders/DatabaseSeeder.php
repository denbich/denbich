<?php

namespace Database\Seeders;

use CreateUsersTable;
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
        $this->call([
            CreateUsersTable::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
