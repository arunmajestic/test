<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRobotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('robots', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('organisationId');
			$table->unsignedBigInteger('robotId')->unique();
			$table->string('name',100);
			$table->string('ipAddress',15);
			$table->string('port',4);
            $table->timestamps();
			
			$table->foreign('organisationId')->references('id')->on('organisations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('robots');
    }
}
