<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     *  @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            //Creamos  las columnas de la tablas
            $table->increments('id')->unique();
            $table->string('name',50);
            $table->string('address');
            $table->string('city');
            $table->string('zip');
            $table->string('country');
            $table->string('phone');
            $table->string('email');
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
        Schema::dropIfExists('suppliers');
    }
}
