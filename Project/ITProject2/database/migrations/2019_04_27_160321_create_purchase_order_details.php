<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrderDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_order_details', function (Blueprint $table) {
            $table->increments('podetails_id');
            $table->integer('po_id')->unsigned();
            $table->string('product_name');
            $table->string('item_price');
            $table->string('item_quantity');
            $table->enum('status',['Pending', 'Ongoing','Delivered'])->default('Pending');
            $table->foreign('po_id')
            ->references('po_id')
            ->on('purchase_order')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_order_details');
    }
}
