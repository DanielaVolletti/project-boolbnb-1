<?php

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
            UsersSeeder::class,
            ApartmentsSeeder::class,
            PackagesSeeder::class,
            ViewsSeeder::class,
            ServicesSeeder::class,
            PartnershipsSeeder::class,
            MessagesSeeder::class
        ]);
    }
}

