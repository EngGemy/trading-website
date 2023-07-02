<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'meta_title', 'meta_description'];

    public function save(array $options = [])
{
    // Perform SEO-related logic here
    // Modify the meta_title and meta_description attributes if needed

    return parent::save($options);
}

public function tradingCompanies()
{
    return $this->belongsToMany(TradingCompany::class);
}


}
