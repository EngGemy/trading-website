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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('images')->nullable();
            $table->string('website_link')->nullable();
            $table->unsignedBigInteger('company_name_id')->nullable();
            $table->foreign('company_name_id')->references('id')->on('company_names');
            $table->timestamps();
        });

        Schema::create('company_country', function (Blueprint $table) {
            $table->foreignId('company_id')->constrained();
            $table->foreignId('country_id')->constrained();
            $table->timestamps();
        });

        Schema::create('company_platform', function (Blueprint $table) {
            $table->foreignId('company_id')->constrained();
            $table->foreignId('platform_id')->constrained();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('company_country');
        Schema::dropIfExists('company_platform');
        Schema::dropIfExists('companies');
    }
};
