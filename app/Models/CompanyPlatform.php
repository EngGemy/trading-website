<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyPlatform extends Model
{
    protected $table = 'company_platform';
    
    protected $fillable = [
        'company_id',
        'platform_id',
    ];

    public function companies()
    {
        return $this->belongsToMany(Company::class, 'company_platform');
    }
    

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }
}
