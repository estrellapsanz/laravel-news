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
        Schema::create('news_laravel', function (Blueprint $table) {
            $table->id();
            $table->string('title',254);
            $table->string('author',150);
            $table->timestamp('publication_date');
            $table->longText('content');
            $table->string('img_path',150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_laravel');
    }
};
