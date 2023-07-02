<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'questions',
        'trading_company_id',
    ];

    protected $casts = [
        'questions' => 'array',
    ];
    public function tradingCompany()
    {
        return $this->belongsTo(TradingCompany::class);
    }
}
