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
        Schema::create('fraud_reports', function (Blueprint $table) {
            $table->id();

            $table->string('fraud_type');
            $table->string('contact_method');
            $table->date('first_contact_date');
            $table->text('fraudster_info');
            $table->text('fraud_method');
            $table->boolean('publish_consent');
            $table->unsignedBigInteger('company_name_id');
            $table->foreign('company_name_id')->references('id')->on('company_names')->onDelete('cascade');
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
        Schema::dropIfExists('fraud_reports');
    }
};
