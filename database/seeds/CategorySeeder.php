<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'COOKING RECIPE',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('categories')->insert([
            'name' => 'DELICIOUS FOODS',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now() 
        ]);
        DB::table('categories')->insert([
            'name' => 'EVENTS DESIGN',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]); DB::table('categories')->insert([
            'name' => 'RESTAURANT PLACE',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('categories')->insert([
            'name' => 'WORDPRESS',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
