<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_type_id');
            $table->foreign('user_type_id')
                    ->references('id')
                    ->on('usertypes');
                    // ->onUpdate('cascade')
                    // ->onDelete('cascade'); //set null
            $table->unsignedInteger('module_id');
            $table->foreign('module_id')
                    ->references('id')
                    ->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accesses');
    }
}
