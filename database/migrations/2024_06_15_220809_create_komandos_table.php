<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomandosTable extends Migration
{
    public function up()
    {
        Schema::create('komandos', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Pavadinimas')->nullable();
            $table->string('Miestas')->nullable();
            $table->year('Ikurmio_metai')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('komandos');
    }
}
