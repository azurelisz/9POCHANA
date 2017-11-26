<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->boolean('vote1')->default(false);
            $table->boolean('vote2')->default(false);
            $table->boolean('vote3')->default(false);
            $table->boolean('vote4')->default(false);
            $table->boolean('vote5')->default(false);
            $table->boolean('vote6')->default(false);
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
        Schema::dropIfExists('votes');
    }
}
