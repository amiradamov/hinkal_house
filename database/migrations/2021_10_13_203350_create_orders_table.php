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
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade'); //set null
            $table->float('total_amount');
            $table->boolean('order_status');
            $table->string('payment_method');
            $table->boolean('payment_status');
            $table->unsignedInteger('proccessed_by');
            $table->foreign('proccessed_by')
                    ->references('id')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade'); //set null
            $table->unsignedInteger('comments_id');
            $table->foreign('comments_id')
                    ->references('id')
                    ->on('comments')
                    ->onUpdate('cascade')
                    ->onDelete('cascade'); //set null
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
