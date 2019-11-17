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
            $table->increments('product_id');
            $table->string('product_code')->unique();
            $table->string('name');
            $table->string('brand');
            $table->string('category');
            $table->string('supplier');
            $table->decimal('price', 8, 2);
            $table->integer('quantity_in_stock');
            $table->enum('status', ['Available', 'Unavailable', 'For Re-Ordering']);
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
