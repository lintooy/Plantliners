<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id('inventoryID');
            $table->unsignedBigInteger('farmerID');
            $table->foreign('farmerID')->references('id')->on('admins');
            $table->unsignedBigInteger('productID');
            $table->foreign('productID')->references('productID')->on('products');
			$table->string('productDescription');
			$table->unsignedBigInteger('categoryID');
            $table->foreign('categoryID')->references('categoryID')->on('categories');
            $table->bigInteger('qty');
            $table->float('price');
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
        Schema::dropIfExists('inventories');
    }
}
