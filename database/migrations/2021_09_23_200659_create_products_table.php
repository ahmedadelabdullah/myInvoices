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
            $table->string('name','191')->unique();
            $table->unsignedBigInteger('price')->nullable();
            $table->string('image')->nullable();
            $table->boolean('type')->nullable(); //textile or soiree
            $table->string('tex-type')->nullable();    // soft
            $table->decimal('meterage');
            $table->unsignedBigInteger('stoked')->nullable();
            $table->unsignedBigInteger('stoked-returns')->nullable();
            $table->unsignedBigInteger('stoked-rolls')->nullable();
            $table->unsignedBigInteger('colors')->nullable();
            $table->unsignedBigInteger('meter-in-roll')->nullable();
            $table->unsignedBigInteger('cutting')->nullable();
            $table->unsignedBigInteger('ironing')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
