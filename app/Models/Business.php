<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    public $table = "businesses";


    
    protected $fillable = [
        'business_logo',
        'business_title', 
        'business_category', 
        'business_description',
        'status',
        'business_brochure',
        'business_document',
        'recommended',
        'business_image',


       
        
        'monday_from',
        'monday_to',
        'tuesday_from',
        'tuesday_to',
        'wednesday_from',
        'wednesday_to',
        'thursday_from',
        'thursday_to',
        'friday_from',
        'friday_to',
        'saturday_from',
        'saturday_to',
        'sunday_from',
        'sunday_to',


        'country',
        'city',
        'location',
        'lat',
        'lang',

        'email',
        'mobile_no',
        'website',
        'fax_no',


        'faceboo',
        'linkedin',
        'twitter',
        'instagram',


       
    ];

    public function galllery_images()
    {
        return $this->hasMany(Galllery_image::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }


    public function business_informations()
    {
        return $this->hasMany(business_information::class);
    }

    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    

    
    
    public function vendor()
    {
    return $this->belongsTo(Vendor::class);
    }
}
