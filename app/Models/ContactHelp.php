<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactHelp extends Model
{
    protected $table = 'contact_helps';
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'fraud_report_id',
    ];

    public function fraudReport()
    {
        return $this->belongsTo(FraudReport::class);
    }
}
