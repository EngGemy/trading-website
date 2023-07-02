<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradingCompany extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'logo',
        'slug',
        'country',
        'year_founded',
        'site_link',
        'withdrawal_commission',
        'minimum_deposit_amount',
        'islamic_account',
        'demo_account',
        'meta_title',
        "verified_account",
        'meta_description',
        'company_name_id'
    ];

    public function countries()
    {
        return $this->belongsToMany(Country::class, 'trading_company_country');
    }

    public function deposits()
    {
        return $this->belongsToMany(Deposit::class, 'trading_company_deposit');
    }

    public function financialAssets()
    {
        return $this->belongsToMany(FinancialAsset::class, 'trading_company_financial_asset');
    }

    public function licenses()
    {
        return $this->belongsToMany(License::class, 'trading_company_license');
    }

    public function platforms()
    {
        return $this->belongsToMany(Platform::class, 'trading_company_platform');
    }

    public function withdrawals()
    {
        return $this->belongsToMany(Withdrawal::class, 'trading_company_withdrawal');
    }

    public function companyName()
    {
        return $this->belongsTo(CompanyName::class, 'company_name_id');
    }

    public function aboutCompany()
    {
        return $this->hasOne(AboutCompany::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }


    // Override the save method to perform SEO-related logic if needed
    public function save(array $options = [])
    {
        // Perform SEO-related logic here
        // Modify the meta_title and meta_description attributes if needed

        return parent::save($options);
    }
}
