<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardMemberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('Board_member', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->string('phone_no');
            $table->string('email');
            $table->string('occupation');
            $table->string('education_level');
            $table->string('bibliograph');
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
        Schema::drop('Board_member');
    }

}
