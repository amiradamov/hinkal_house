<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siteinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('site_name')->nullable();
            $table->binary('site_logo')->nullable();
            $table->string('description')->nullable();
            $table->json('contact_info')->nullable();
            $table->string('address')->nullable();
            $table->unsignedInteger('proccessed_by')->nullable();
            $table->foreign('proccessed_by')
                    ->references('id')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade')->nullable(); //set null
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siteinfos');
    }
}
