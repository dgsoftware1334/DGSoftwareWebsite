<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liens', function (Blueprint $table) {
             $table->id();
            $table->string('nom')->required();
            $table->string('path')->required()->unique();
            $table->string('mime')->required();
            $table->string('type')->required();
            $table->text('description');
            $table->unsignedBigInteger('id_galerie')->references('id')->on('galeries')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();
            
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
        Schema::dropIfExists('liens');
    }
}
