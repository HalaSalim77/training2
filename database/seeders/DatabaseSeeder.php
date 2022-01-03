<?php

namespace Database\Seeders;

use App\Models\Petition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
           //array of data
        // DB::table('petitions')->insert([
        //      'title'=> Str::random(10),
        //      'category' => text::random(30),
        // ]);


        Petition::factory(50)->create();
    }
}
