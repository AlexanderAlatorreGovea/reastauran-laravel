<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MessageSeeder extends Seeder
{
    /** 
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'name' => "ALEXANDER",
            'email' => "alexander.g@lakanto.com",
            'phone' => "8057585059", 
            'message' => "Hellow",
            'created_at' => Carbon::now()
        ]);
    } 
} 
 