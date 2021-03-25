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
            $table->unsignedBigInteger('service')->unsigned()->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->required();
            $table->string('telephone')->required();
            $table->string('adresse')->nullable();
            $table->string('quantité')->required();
            $table->string('produit'); 
            $table->string('details')->nullable();
            $table->string('recu')->nullable();
            $table->string('logo')->nullable();
            $table->foreign('service')->references('id')->on('services')
                                        ->onDelete('SET NULL')
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
        Schema::dropIfExists('commandes');
    }
}
