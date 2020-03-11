<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipentsTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participents_table', function (Blueprint $table) {
            $table->bigIncrements('p_id');
            $table->string('p_name');
            $table->string('p_email')->unique();
            $table->string('p_contact')->unique();
            $table->integer('quiz_id')->nullable();
            $table->integer('qq_id')->nullable();
            $table->string('p_answer');
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
        Schema::dropIfExists('participents_table');
    }
}
