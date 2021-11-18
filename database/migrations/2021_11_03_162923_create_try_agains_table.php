<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTryAgainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('try_agains', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('try_id');
            $table->foreign('try_id')
                    ->references('id')
                    ->on('try_this');
            $table->unsignedInteger('try2_id');
            $table->foreign('try2_id')
                    ->references('id')
                    ->on('try_this');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('try_agains');
    }
}
