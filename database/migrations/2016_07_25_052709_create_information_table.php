<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->integer('year');
            $table->string('campus');
            $table->string('department');
            $table->string('phone')->nullable();
            $table->string('wechatId')->nullable();
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
        //
    }
}
