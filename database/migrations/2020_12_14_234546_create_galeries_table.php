<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id')->unsigned()->nullable();
            $table->string('titre')->required();
            $table->string('catégorie')->required();
            $table->text('description')->nullable();
            $table->string('main_image')->required();
            $table->foreign('service_id')->references('id')->on('services')
                                        ->onDelete('cascade')
                                        ->onUpdate('cascade');
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
        Schema::dropIfExists('galeries');
    }
}
