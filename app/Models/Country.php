<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    
    protected $fillable = ['name_arabic', 'name_english'];

    public function companies()
{
    return $this->belongsToMany(Company::class);
}

public function fraudulentCompanies()
{
    return $this->belongsToMany(FraudulentCompanies::class, 'fraudulent_company_country', 'country_id', 'fraudulent_company_id');
}

public function tradingCompanies()
{
    return $this->belongsToMany(TradingCompany::class);
}

}
