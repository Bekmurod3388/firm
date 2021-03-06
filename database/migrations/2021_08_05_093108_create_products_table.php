<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('head_ru')->nullable();
            $table->text('head2_ru')->nullable();
            $table->text('description_ru')->nullable();
            $table->string('head_en')->nullable();
            $table->text('head2_en')->nullable();
            $table->text('description_en')->nullable();
            $table->string('img')->nullable();
            $table->string('img2')->nullable();
            $table->bigInteger('category_id')->index();
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
        Schema::dropIfExists('products');
    }
}
