<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('suppliers_id')->index();
            $table->unsignedBigInteger('invoice_number');
            $table->string('material');
            $table->decimal('unit_price');
            $table->unsignedBigInteger('quantity');
            $table->unsignedBigInteger('price');

            $table->timestamps();

            $table->foreign('suppliers_id')
               ->references('id')
                ->on('suppliers')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_invoices');
    }
}
