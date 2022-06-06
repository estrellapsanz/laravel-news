<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

      Schema::create('news_categories_laravel', function (Blueprint $table) {
        $table->foreignId('id_new')->constrained('news_laravel');
        $table->foreignId('id_category')->constrained('categories_laravel');

    });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_categories_laravel');
    }


};
