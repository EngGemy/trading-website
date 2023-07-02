<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FraudMethod extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'meta_title', 'meta_description'];

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

    public function fraudulentCompanies()
    {
        return $this->belongsToMany(FraudulentCompanies::class, 'fraud_method_fraudulent_companies', 'fraud_method_id', 'fraudulent_company_id');
    }
}
