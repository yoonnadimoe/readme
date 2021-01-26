<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = array('Fiction', 'Non-Fiction', 'Si-Fi', 'Textbook', 'Language' ,'Action', 'adventure', 'Art/Architecture', 'Biography', 'History', 'Children', 'Economic', 'Classic', 'Cookbook', 'Comic Book', 'Dictionary', 'Crime', 'Guide', 'Drama', 'Health', 'Fantasy', 'Fairytale', 'Novel', 'Humor', 'Historical Fiction', 'Horror', 'Journal', 'Mystery', 'Math', 'Romance', 'Prayer', 'Poetry', 'Short Story', 'Thriller', 'Sports', 'Western', 'Travel');

         $now = Carbon::now();

        foreach ($genres as $genre) {
        	DB::table('genres')->insert([
        		'name' => $genre,
        		'created_at' => $now,
        		'updated_at' => $now,
        	]);
        }	
    }
}
