<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FraudulentCompanies extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'images', 'website_link'];

// Define the many-to-many relationship with Country
public function countries()
{
    return $this->belongsToMany(Country::class, 'fraudulent_company_country');
}

// Define the many-to-many relationship with Platform
public function platforms()
{
    return $this->belongsToMany(Platform::class, 'fraudulent_company_platform');
}

// Define the many-to-many relationship with FraudMethod
public function fraudMethods()
{
    return $this->belongsToMany(FraudMethod::class, 'fraudulent_company_fraud_method');
}
    public function companyName()
    {
        return $this->belongsTo(CompanyName::class);
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
}
