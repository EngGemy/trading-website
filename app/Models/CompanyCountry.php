<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyCountry extends Model
{
    protected $table = 'company_country';
    
    protected $fillable = [
        'company_id',
        'country_id',
    ];

    public function companies()
    {
        return $this->belongsToMany(Company::class, 'company_country');
    }
    

    public function country()
    {
        return $this->belongsToMany(Country::class, 'company_country');
    }
    



}
