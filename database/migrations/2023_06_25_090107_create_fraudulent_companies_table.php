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
        Schema::create('fraudulent_companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('images')->nullable();
            $table->string('website_link')->nullable();
            $table->unsignedBigInteger('company_name_id')->nullable();
            $table->foreign('company_name_id')->references('id')->on('company_names');
            $table->timestamps();
        });

        Schema::create('fraudulent_company_country', function (Blueprint $table) {
            $table->foreignId('fraudulent_companies_id')->constrained('fraudulent_companies');
            $table->foreignId('country_id')->constrained('countries');
            $table->timestamps();
        });

        Schema::create('fraudulent_company_platform', function (Blueprint $table) {
            $table->foreignId('fraudulent_companies_id')->constrained('fraudulent_companies');
            $table->foreignId('platform_id')->constrained('platforms');
            $table->timestamps();
        });

        Schema::create('fraudulent_company_fraud_method', function (Blueprint $table) {
            $table->foreignId('fraudulent_companies_id')->constrained('fraudulent_companies');
            $table->foreignId('fraud_method_id')->constrained('fraud_methods');
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
        Schema::dropIfExists('fraudulent_company_country');
        Schema::dropIfExists('fraudulent_company_platform');
        Schema::dropIfExists('fraudulent_company_fraud_method');
        Schema::dropIfExists('fraudulent_companies');
    }
};
