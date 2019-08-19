<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers',function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('mail');
            $table->string('phone');
            $table->string('university');
            $table->string('major');
            $table->string('acyear');
            $table->string('Committee');
            $table->string('ras-question');
            $table->text('past-vol-work');
            $table->string('why-join');
            $table->string('facebook')->nullable();
            $table->string('comments')->nullable();
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
