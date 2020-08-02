<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        DB::table('blogs')->insert([
            'title' => 'COOKING RECIPE DELICIOUS',
            'author' => 'James Alatorre',
            'preview_content' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius',
            'full_content' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius',
            'keywords' => 'Cooking, Food',
            'image_url' => '/img/blog-06.jpg',
            'amount_of_comments' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('blogs')->insert([
            'title' => 'PIZZA IS PREPARED FRESH',
            'author' => 'James Alatorre',
            'preview_content' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius',
            'full_content' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius',
            'keywords' => 'Cooking, Food',
            'image_url' => '/img/blog-04.jpg',
            'amount_of_comments' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('blogs')->insert([
            'title' => 'STYLE THE WEDDING PARTY',
            'author' => 'James Alatorre',
            'preview_content' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius',
            'full_content' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius',
            'keywords' => 'Cooking, Food',
            'image_url' => '/img/blog-07.jpg',
            'amount_of_comments' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('blogs')->insert([
            'title' => 'BEST PLACES FOR WINE',
            'author' => 'James Alatorre',
            'preview_content' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius',
            'full_content' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius',
            'keywords' => 'Cooking, Food',
            'image_url' => '/img/blog-10.jpg',
            'amount_of_comments' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('blogs')->insert([
            'title' => 'COOKING DELICIOUS',
            'author' => 'James Alatorre',
            'preview_content' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius',
            'full_content' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius',
            'keywords' => 'Cooking, Food',
            'image_url' => '/img/blog-06.jpg',
            'amount_of_comments' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('blogs')->insert([
            'title' => 'PIZZA',
            'author' => 'James Alatorre',
            'preview_content' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius',
            'full_content' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius',
            'keywords' => 'Cooking, Food',
            'image_url' => '/img/blog-04.jpg',
            'amount_of_comments' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('blogs')->insert([
            'title' => 'THE WEDDING PARTY',
            'author' => 'James Alatorre',
            'preview_content' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius',
            'full_content' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius',
            'keywords' => 'Cooking, Food',
            'image_url' => '/img/blog-07.jpg',
            'amount_of_comments' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('blogs')->insert([
            'title' => 'WINE',
            'author' => 'James Alatorre',
            'preview_content' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius',
            'full_content' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius',
            'keywords' => 'Cooking, Food',
            'image_url' => '/img/blog-10.jpg',
            'amount_of_comments' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
