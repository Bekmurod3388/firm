<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('header_ru')->nullable();
            $table->string('header2_ru')->nullable();
            $table->longText('description_ru')->nullable();
            $table->string('header_uz')->nullable();
            $table->string('header2_uz')->nullable();
            $table->longText('description_uz')->nullable();
            $table->string('header_en')->nullable();
            $table->string('header2_en')->nullable();
            $table->longText('description_en')->nullable();
            $table->string('img')->nullable();
            $table->integer('viewed')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
