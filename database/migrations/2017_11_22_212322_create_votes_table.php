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
            $table->boolean('vote7')->default(false);
            $table->boolean('vote8')->default(false);
            $table->boolean('vote9')->default(false);
            $table->boolean('vote10')->default(false);
            $table->boolean('vote11')->default(false);
            $table->boolean('vote12')->default(false);
            $table->boolean('vote13')->default(false);
            $table->boolean('vote14')->default(false);
            $table->boolean('vote15')->default(false);
            $table->boolean('vote16')->default(false);
            $table->boolean('vote17')->default(false);
            $table->boolean('vote18')->default(false);
            $table->boolean('vote19')->default(false);
            $table->boolean('vote20')->default(false);
            $table->boolean('vote21')->default(false);
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
