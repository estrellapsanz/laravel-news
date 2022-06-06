<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\News;
use App\Models\NewsCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        News::truncate();
        Categories::truncate();
        NewsCategories::truncate();
        Schema::enableForeignKeyConstraints();

        \App\Models\Categories::factory(6)->create();
        \App\Models\News::factory(150)->create();
        \App\Models\NewsCategories::factory(400)->create();


    }
}










/*

Categories::truncate();
        NewsCategories::truncate();

        $nacional=Categories::create( ['name'=>'Nacional']);
        $internacional=Categories::create( ['name'=>'Internacional']);
        $economia=Categories::create( ['name'=>'Economia']);
        $deportes=Categories::create( ['name'=>'Deportes']);
        $cultura=Categories::create( ['name'=>'Cultura']);
        $ciencia=Categories::create( ['name'=>'Ciencia']);
*/
