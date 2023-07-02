<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradingCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trading_companies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('logo');
            $table->string('slug')->unique();
            $table->string('country');
            $table->unsignedSmallInteger('year_founded');
            $table->string('site_link');
            $table->decimal('withdrawal_commission', 5, 2)->default(0.00);
            $table->decimal('minimum_deposit_amount', 10, 2)->default(0.00);
            $table->boolean('islamic_account')->default(false);
            $table->boolean('verified_account')->default(false);
            $table->boolean('demo_account')->default(false);
            $table->unsignedBigInteger('company_name_id')->nullable();
            $table->foreign('company_name_id')->references('id')->on('company_names');
            $table->timestamps();


        });

        Schema::create('trading_company_deposit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trading_company_id');
            $table->unsignedBigInteger('deposit_id');

            $table->foreign('trading_company_id')->references('id')->on('trading_companies')->onDelete('cascade');
            $table->foreign('deposit_id')->references('id')->on('deposits')->onDelete('cascade');
        });

        Schema::create('trading_company_financial_asset', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trading_company_id');
            $table->unsignedBigInteger('financial_asset_id');

            $table->foreign('trading_company_id')->references('id')->on('trading_companies')->onDelete('cascade');
            $table->foreign('financial_asset_id')->references('id')->on('financial_assets')->onDelete('cascade');
        });

        Schema::create('trading_company_license', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trading_company_id');
            $table->unsignedBigInteger('license_id');

            $table->foreign('trading_company_id')->references('id')->on('trading_companies')->onDelete('cascade');
            $table->foreign('license_id')->references('id')->on('licenses')->onDelete('cascade');
        });

        Schema::create('trading_company_platform', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trading_company_id');
            $table->unsignedBigInteger('platform_id');

            $table->foreign('trading_company_id')->references('id')->on('trading_companies')->onDelete('cascade');
            $table->foreign('platform_id')->references('id')->on('platforms')->onDelete('cascade');
        });

        Schema::create('trading_company_withdrawal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trading_company_id');
            $table->unsignedBigInteger('withdrawal_id');

            $table->foreign('trading_company_id')->references('id')->on('trading_companies')->onDelete('cascade');
            $table->foreign('withdrawal_id')->references('id')->on('withdrawals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trading_company_withdrawal');
        Schema::dropIfExists('trading_company_platform');
        Schema::dropIfExists('trading_company_license');
        Schema::dropIfExists('trading_company_financial_asset');
        Schema::dropIfExists('trading_company_deposit');
        Schema::dropIfExists('trading_companies');
    }
}
