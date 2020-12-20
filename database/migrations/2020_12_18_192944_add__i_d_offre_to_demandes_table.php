<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIDOffreToDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demandes', function (Blueprint $table) {
          $table->unsignedBigInteger('ID_offre')->after('id');
          $table->foreign('ID_offre')->references('id')->on('offres')->onDelete('cascade')->onUpdate('cascade');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('demandes', function (Blueprint $table) {
          $table->dropForeign(['ID_offre']);
          $table->dropColumn('ID_offre')->onDelet('cascade')->onUpdate('cascade');

        });
    }
}
