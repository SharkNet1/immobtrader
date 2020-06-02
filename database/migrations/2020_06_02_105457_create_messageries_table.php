<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messageries', function (Blueprint $table) {
            $table->increments('idMess');
            $table->string('libMess');
            $table->text('contMess');
            $table->integer('emMess');
            $table->integer('desMess');
            $table->string('typeMess');
            $table->string('etatMess');
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
        Schema::dropIfExists('messageries');
    }
}
