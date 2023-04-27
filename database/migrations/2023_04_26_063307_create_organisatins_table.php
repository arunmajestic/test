<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisatinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisatins', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('userId');
			$table->string('name',100);
			$table->string('contactPerson',100);
			$table->string('contactNumber',100);
            $table->timestamps();
			
			$table->foreign('userId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organisatins');
    }
}
