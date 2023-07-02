<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FraudReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'fraud_type',
        'contact_method',
        'first_contact_date',
        'fraudster_info',
        'fraud_method',
        'company_name_id', // Update column name
        'publish_consent',
    ];

    public function companyName()
    {
        return $this->belongsTo(CompanyName::class, 'company_name_id'); // Update foreign key
    }


}
