<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAadharsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aadhars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('u_id')->unique();
            $table->string('name');
            $table->string('dob');
            $table->string('gender');
            $table->text('address');
            $table->string('relation');
            $table->string('r_name');
            $table->string('city');
            $table->string('state');
            $table->string('pin_code');
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
        Schema::drop('aadhars');
    }
}
