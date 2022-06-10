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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('title');
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->text('detail')->nullable();
            $table->float('min_price')->nullable();
            $table->float('max_price')->nullable();
            $table->string('dwelling_type')->nullable();
            $table->integer('num_of_rooms')->nullable();
            $table->string('warming_type')->nullable();
            $table->string('province')->nullable();
            $table->string('district')->nullable();
            $table->float('building_age')->nullable();
            $table->integer('floor_location')->nullable();
            $table->integer('num_of_bath')->nullable();
            $table->string('status',6)->default('False');
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
        Schema::dropIfExists('homes');
    }
};
