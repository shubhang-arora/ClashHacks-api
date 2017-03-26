<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('p_id');
            $table->string('s_id');
            $table->string('issuer');
            $table->string('nationality');
            $table->date('dob');
            $table->string('sex');
            $table->date('doe');
            $table->string('opt1');
            $table->string('opt2');
            $table->string('mrz');
            $table->string('d_code')->unique();
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
        Schema::drop('passports');
    }
}
