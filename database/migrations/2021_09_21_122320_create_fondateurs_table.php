<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFondateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fondateurs', function (Blueprint $table) {
            $table->id();
            $table->String('Nom');
            $table->String('Prenom');
            $table->integer('Telephone');
            $table->String('Email');
            $table->String('Specialite');
            $table->Text('Details');
            $table->String('Image');
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
        Schema::dropIfExists('fondateurs');
    }
}
