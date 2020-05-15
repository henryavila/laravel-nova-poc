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
        factory(App\User::class)->create([
            'name'  => 'Admin',
            'email'  => 'admin@example.com',
            'password'  => \Illuminate\Support\Facades\Hash::make('secret'),
            'active'  => true,
        ]);
        factory(App\User::class, 50)->create();
    }
}
