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
            $table->bigIncrements('id');
             $table->string('token')->nullable();
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('desc')->nullable();
            $table->string('status')->nullable();
            $table->text('unit')->nullable();
            $table->string('image')->nullable();
            $table->string('min_level_overall')->nullable();
            $table->string('current_stock_level')->nullable();
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
