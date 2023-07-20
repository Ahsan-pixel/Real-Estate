<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_information', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->unique();
            $table->string('language')->nullable();
            $table->string('real_estate_type')->nullable();
            $table->boolean('citizenship_eligible')->nullable();
            $table->boolean('first_hand_project')->nullable();
            $table->string('city')->nullable();
            $table->boolean('method')->nullable();
            $table->unsignedInteger('minimum_investment')->nullable();
            $table->unsignedInteger('maximum_investment')->nullable();
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
        Schema::dropIfExists('user_information');
    }
}
