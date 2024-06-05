<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request_call extends Model
{
    use HasFactory;

    protected $fillable = [

        'business_call_id', 
        'vendor_call_id',
        'customer_call_id',         
    
    ];
}
