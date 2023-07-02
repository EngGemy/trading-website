<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new  class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('full_name');
            $table->boolean('active')->default(false);

            $table->text('body');
            $table->integer('rating');
            $table->boolean('agree_terms')->default(false);
            $table->unsignedBigInteger('company_name_id')->nullable();
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
        Schema::dropIfExists('ratings');
    }
};
