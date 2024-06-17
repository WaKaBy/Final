<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRungtynesTable extends Migration
{
    public function up()
    {
        Schema::create('rungtynes', function (Blueprint $table) {
            $table->id('ID');
            $table->dateTime('data_ir_laikas')->nullable();
            $table->string('vieta')->nullable();
            $table->unsignedBigInteger('komandos_ID');
            $table->timestamps();

            $table->foreign('komandos_ID')->references('ID')->on('komandos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rungtynes');
    }
}
