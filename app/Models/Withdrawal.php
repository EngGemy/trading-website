<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'meta_title', 'meta_description'];

    // Define any relationships or methods here

    public function tradingCompanies()
    {
        return $this->belongsToMany(TradingCompany::class);
    }
}
