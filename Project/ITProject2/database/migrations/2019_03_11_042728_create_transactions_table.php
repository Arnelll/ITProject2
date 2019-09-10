<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('tId');
            $table->integer('client_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('quantity');
            $table->enum('service',['Repair and Maintenance', 'Lifting','Wheel Alignment','Painting', 'N/A'])->default('N/A');
            $table->enum('status',['Pending', 'Ongoing','Rendered','Cancelled'])->default('Pending');
            $table->foreign('client_id')
            ->references('client_id')
            ->on('clients')
            ->onDelete('cascade');
            $table->foreign('product_id')
            ->references('product_id')
            ->on('products')
            ->onDelete('cascade');
            $table->integer('price');
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
        Schema::dropIfExists('transactions');
    }
}
