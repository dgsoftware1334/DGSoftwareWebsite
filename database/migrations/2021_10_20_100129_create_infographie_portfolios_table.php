<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfographiePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infographie_portfolios', function (Blueprint $table) {
            $table->id();$table->String('image');
            $table->unsignedBigInteger('infographie_service_id')->nullable();
            $table->timestamps();

            $table->foreign('infographie_service_id')->references('id')->on('infographie_services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infographie_portfolios');
    }
}
