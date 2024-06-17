<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZaidejaiTable extends Migration
{
    public function up()
    {
        Schema::create('zaidejai', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Vardas')->nullable();
            $table->string('Pavarde')->nullable();
            $table->date('Gimimo_data')->nullable();
            $table->decimal('Aukstis', 5, 2)->nullable();
            $table->decimal('Svoris', 5, 2)->nullable();
            $table->unsignedBigInteger('Komandos_ID')->nullable();
            $table->timestamps();

            $table->foreign('Komandos_ID')->references('ID')->on('komandos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('zaidejai');
    }
}
