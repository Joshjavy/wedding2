<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('RSVPu')->nullable();
            $table->string('RSVPd')->nullable();
            $table->string('RSVPt')->nullable();
            $table->string('RSVPc')->nullable();
            $table->string('Mobile')->nullable();
            $table->string('allergies')->nullable();
            $table->string('transport')->nullable();
            $table->string('song')->nullable();
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
        Schema::dropIfExists('registros');
    }
}
