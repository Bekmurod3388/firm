<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorfilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_films', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id')
                ->constrained('vendors')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('path')->nullable();
            $table->string('header_ru')->nullable();
            $table->string('header_en')->nullable();
            $table->string('text_ru')->nullable();
            $table->string('text_en')->nullable();
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
        Schema::dropIfExists('vendorfilms');
    }
}
