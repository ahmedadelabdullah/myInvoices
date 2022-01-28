<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('material_invoices_id')->index();
            $table->string('name','191')->unique();
            $table->string('mobile');
            $table->string('title');
            $table->decimal('amount');
            $table->timestamps();
            $table->softDeletes();

//            $table->foreign('material_invoices_id')
//                ->references('id')
//                ->on('material_invoices')
//                ->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
