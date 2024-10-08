<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Topics', function (Blueprint $table) {
            $table->increments('id');
			$table->string('topicname',100)->unique;
            $table->timestamps();
        });
		
	        Schema::create('Blocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('topicid')->unsigned();		
            $table->foreign('topicid')->references('id')->on('Topics')->onDelete('cascade');		
			$table->string('title',100);
			$table->longText('content')->nullable();
			$table->string('imagesPath',255);
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
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		Schema::dropIfExists('Topics');
		Schema::dropIfExists('Blocks');
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
