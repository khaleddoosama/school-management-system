<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassroomsTable extends Migration {

	public function up()
	{
		Schema::create('Classrooms', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('Name_Class');
			$table->bigInteger('Grade_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Classrooms');
	}
}
