<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'genre' => 'Homme',
        ]);
        
        DB::table('genres')->insert([
            'genre' => 'Femme',
        ]);
    }
}
