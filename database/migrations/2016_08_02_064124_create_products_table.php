<?php

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
            $table->increments('id');
            $table->string('product_name')->unique();
            $table->longText('detail');
            $table->string('image');
            $table->string('image_detail1');
            $table->string('image_detail2');
            $table->string('size');
            $table->integer('price');
            $table->integer('view');
            $table->integer('category_id')->unsign();
            $table->foreign('category_id')->references('categories')->onDelete('cascade');
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
        Schema::drop('products');
    }
}
