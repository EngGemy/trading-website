<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trading_company_country', function (Blueprint $table) {
            $table->unsignedBigInteger('trading_company_id');
            $table->unsignedBigInteger('country_id');
            $table->timestamps();

            $table->foreign('trading_company_id')->references('id')->on('trading_companies')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trading_company_country');
    }
};
