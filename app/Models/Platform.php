<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Platform extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = ['name', 'meta_title', 'meta_description'];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function companies()
{
    return $this->belongsToMany(Company::class);
}

public function fraudMethods()
    {
        return $this->belongsToMany(FraudMethod::class, 'fraud_method_platform', 'platform_id', 'fraud_method_id');
    }

    public function tradingCompanies()
    {
        return $this->belongsToMany(TradingCompany::class);
    }

}

