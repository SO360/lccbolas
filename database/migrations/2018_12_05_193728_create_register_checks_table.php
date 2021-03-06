<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterChecksTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('register_checks', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('last_name');
			$table->string('mother_last_name');
			$table->string('email')->unique();
			$table->string('cellphone');
			$table->date('created');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('register_checks');
	}
}
