<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->String('etat')->default('Nouvelle');
            $table->unsignedBigInteger('infographie_service_id');
            $table->unsignedBigInteger('visiteur_id');
            $table->timestamps();

            $table->foreign('infographie_service_id')->references('id')->on('infographie_services')->onDelete('cascade');
            $table->foreign('visiteur_id')->references('id')->on('visiteurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
