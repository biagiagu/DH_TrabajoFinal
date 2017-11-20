<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     *  @return void
     */
    public function up()
    {
        Schema::create('product_supplier', function (Blueprint $table) {
            //Creamos  las columnas de la tablas
            $table->increments('id')->unique();
            $table->integer('product_id')->unsigned();
            $table->integer('supplier_id')->unsigned();
            $table->timestamps();

            //Creamos las foreingkeys
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('supplier_id')->references('id')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_supplier');
    }
}
