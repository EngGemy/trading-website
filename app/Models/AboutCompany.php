<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCompany extends Model
{
    use HasFactory;
    protected $table = 'about_company';
    protected $fillable = [
        'title',
        'description',
        'image',
        'trading_company_id',
    ];

    public function tradingCompany()
    {
        return $this->belongsTo(TradingCompany::class);
    }
}
