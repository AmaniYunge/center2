<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::create('Users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('gender');
            $table->string('phone_no');
            $table->string('email');
            $table->string('occupation');
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
        Schema::drop('Users');
	}

}
