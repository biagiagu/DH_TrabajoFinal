<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     *  @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            //Creamos  las columnas de la tablas
            $table->increments('id')->unique();
            $table->integer('product_id')->unsigned();
            $table->string('name', 50);
            $table->double('price',10,2);
            $table->date('valid_from');
            $table->date('valid_to');
            $table->timestamps();

            //Creamos las foreingkeys
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
