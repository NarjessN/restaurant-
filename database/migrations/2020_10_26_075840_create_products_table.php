<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->String('name')->nulllable();
            $table->text('descriptin')->nulllable();
            $table->double('price')->nulllable();
            $table->double('disaccount')->nulllable();
            $table->String('image')->nulllable();
            $table->boolean('isavailable')->nulllable();
            $table->enum('size',['SM','MD','LG'])->default('SM');
             $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
