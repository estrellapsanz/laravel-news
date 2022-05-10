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

      /*  Schema::create('news_categories_laravel', function (Blueprint $table) {
            $table->unsignedInteger('id_new');
            $table->unsignedInteger('id_category');
        });

        Schema::table('news_categories_laravel', function (Blueprint $table) {
        $table->foreign('id_new')->references('id')->on('news_laravel')->onDelete('cascade');;
        $table->foreign('id_category')->references('id')->on('categories_laravel')->onDelete('cascade');;
      });*/
      Schema::create('news_categories_laravel', function (Blueprint $table) {
        $table->foreignId('id_new')->constrained('news_laravel');
        $table->foreignId('id_category')->constrained('categories_laravel');

    });
    }



   /* public function up()
    {
        Schema::create('news_categories_laravel', function (Blueprint $table) {
            $table->unsignedInteger('id_new');
            $table->unsignedInteger('id_category');*/

            /*$table->index('id_new');
            $table->index('id_category');*/
            //$table->foreign('id_new')->references('id')->on('news_laravel')->onDelete('cascade');;
            //$table->foreign('id_category')->references('id')->on('categories_laravel')->onDelete('cascade');;

         /*   $table->foreignId('id_new')
      ->constrained()
      ->onUpdate('cascade')
      ->onDelete('cascade');

      $table->foreignId('id_category')
      ->constrained()
      ->onUpdate('cascade')
      ->onDelete('cascade');
      */
        //});
    //}

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