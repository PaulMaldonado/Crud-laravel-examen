<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');

            $table->bigInteger('marca_id')->unsigned();

            $table->string('name');
            $table->string('upc');
            $table->string('current_cost');
            $table->string('profit_percentage');
            $table->string('enable');

            $table->timestamps();

            $table->foreign('marca_id')->references('id')->on('productos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
