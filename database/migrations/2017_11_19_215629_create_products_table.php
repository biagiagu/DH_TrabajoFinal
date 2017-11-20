<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     *   Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            //Creamos  las columnas de la tablas
             $table->increments('id')->unique();
            $table->string('name', 140);
            $table->longText('description');
            $table->boolean('paused');
            $table->integer('category_id')->unsigned();
            $table->double('initial_stock', 10,2);
            $table->timestamps();

            //Creamos los foreingkeys
            //$table->foreign('category_id')->references('id')->on('categories');

        });
    }

    /**
     *  Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
