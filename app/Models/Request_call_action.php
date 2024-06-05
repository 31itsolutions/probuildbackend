<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request_call_action extends Model
{
    use HasFactory;


    
    protected $fillable = [

        'request_call_action', 
        'request_call_tendor_id',
        'request_call_vendor_id',
        'request_call_removed',         
    
    ];
}

