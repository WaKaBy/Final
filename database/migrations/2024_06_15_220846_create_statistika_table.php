<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatistikaTable extends Migration
{
    public function up()
    {
        Schema::create('statistika', function (Blueprint $table) {
            $table->id('ID');
            $table->unsignedBigInteger('zaidejo_ID')->nullable();
            $table->unsignedBigInteger('rungtyniu_ID')->nullable();
            $table->integer('Taskai')->nullable();
            $table->integer('rezultatyvus_perdavimai')->nullable();
            $table->integer('Atkovoti_kamuoliai')->nullable();
            $table->integer('Blokavimai')->nullable();
            $table->timestamps();

            $table->foreign('zaidejo_ID')->references('ID')->on('zaidejai')->onDelete('cascade');
            $table->foreign('rungtyniu_ID')->references('ID')->on('rungtynes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('statistika');
    }
}
