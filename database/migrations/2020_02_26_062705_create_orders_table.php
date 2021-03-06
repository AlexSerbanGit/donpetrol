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
            $table->bigIncrements('id');
            $table->string('name')->default('order');
            $table->string('type'); // eat in / take out 
            $table->boolean('sent_to_pos')->default(0); 
            $table->boolean('confirmation_email')->default(0);
            $table->string('delivery_time');
            $table->unsignedBigInteger('user_id');
            $table->text('comments');
            $table->string('street_and_house');
            $table->string('phone');
            $table->string('postcode')->nullable();
            $table->string('place_name')->nullable();
            $table->string('payment_method')->nullable();

            // bonus fields
            $table->boolean('paid')->default(0); // 0 - no / 1 - yes
            
            $table->timestamps();
            $table->string('secret');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
