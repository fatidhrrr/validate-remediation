<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@admin.com'),
            'genre_id' => 1,
        ]);

        DB::table('users')->insert([
            'email' => 'utilisateur@utilisateur.com',
            'password' => Hash::make('utilisateur@utilisateur.com'),
            'genre_id' => 2,
        ]);
    }
}