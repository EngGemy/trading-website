<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyName extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'meta_title', 'meta_description'];

    public function company()
    {
        return $this->hasOneThrough(Company::class, TradingCompany::class, 'company_name_id', 'id');
    }



    public function fraudulentCompany()
    {
        return $this->hasOne(FraudulentCompanies::class);
    }

    public function tradingCompany()
    {
        return $this->hasOne(TradingCompany::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
    // SEO methods
    public function setMetaTitleAttribute($value)
    {
        $this->attributes['meta_title'] = $value;
        // You can modify the value or perform any necessary SEO-related logic here
    }

    public function setMetaDescriptionAttribute($value)
    {
        $this->attributes['meta_description'] = $value;
        // You can modify the value or perform any necessary SEO-related logic here
    }

    public function fraudReports()
    {
        return $this->hasMany(FraudReport::class);
    }
}
