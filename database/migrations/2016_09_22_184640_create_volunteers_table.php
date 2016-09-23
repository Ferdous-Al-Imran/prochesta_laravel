<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('birth_day');
            $table->string('sex');
            $table->string('blood_group');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('national_id_no');
            $table->string('phone_no');
            $table->string('email');
            $table->string('facebook');
            $table->string('occupation');
            $table->string('organization');
            $table->string('why_join');
            $table->string('which_project');
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
        Schema::drop('volunteers');
    }
}






























//
