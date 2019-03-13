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
            $table->enum('status',['Pending', 'Ongoing','Rendered','Cancelled'])->default('Pending');
            $table->foreign('client_id')
            ->references('client_id')
            ->on('clients')
            ->onDelete('cascade');
            $table->foreign('product_id')
            ->references('product_id')
            ->on('products')
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
        Schema::dropIfExists('transactions');
    }
}
