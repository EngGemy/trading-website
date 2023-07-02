<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
class ContactMethod extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'slug', 'description', 'meta_title', 'meta_description',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }
}
