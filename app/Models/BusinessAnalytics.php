<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessAnalytics extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_info', 
        'business_id', 
        'clicks', 
        'leads', 
    ];
}
