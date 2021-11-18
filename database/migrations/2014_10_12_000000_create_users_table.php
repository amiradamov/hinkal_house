<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name');
            $table->unsignedInteger('user_type_id');
            $table->foreign('user_type_id')
                    ->references('id')
                    ->on('usertypes')
                    ->onUpdate('cascade') 
                    ->onDelete('cascade'); //set null
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_phone_number');
            $table->string('address');
            // $table->unsignedInteger('order_id');
            // $table->foreign('order_id')
            //         ->references('id')
            //         ->on('orders')
            //         ->onDelete('cascade');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('accaunt_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
