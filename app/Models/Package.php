<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;



    protected $fillable = [
        'package_name', 
        'bussiness_listing', 
        'product_listing',
        'gallery_image', 
        'company_profile',
        'contact', 
        'location',
        'social_media',
        'priority_listing',
        'probuild_verify',
        'tendor_board',
        'validity',
        'price',
        'package_type',
        'gross_type',
        'gross_period',
        'selling_price',
    ];



    public function vendors()
    {
        return $this->belongsToMany( 'App/Vendor', 'package_vendor')->withPivot( 'starts_date', 'ends_date','Approval');
    }
    
}
