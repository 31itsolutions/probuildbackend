<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class business_information extends Model
{
    use HasFactory;



        
    protected $fillable = [

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


        'facebook',
        'linkedin',
        'twitter',
        'instagram',


       
    ];

    public function business()
{
    return $this->belongsTo(Business::class);
}
}
