<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'images', 'website_link','company_name_id'];

    public function platforms()
    {
        return $this->belongsToMany(Platform::class, 'company_platform');
    }

    public function countries()
    {
        return $this->belongsToMany(Country::class, 'company_country');
    }

    public function companyName()
    {
        return $this->belongsTo(CompanyName::class, 'company_name_id');
    }







}
