<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->decimal('shipping');
            $table->decimal('total');
            $table->decimal('tax');
            $table->enum('payment',['carte','mandat','virement','cheque']);
            $table->string('purchase_order');
            $table->tinyInteger('pick');
            $table->integer('invoice_id');
            $table->string('invoice_number');
            $table->foreignId('state_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
