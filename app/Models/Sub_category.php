<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    use HasFactory;




    protected $fillable = [
        'sub_category', 
        'category_type', 
        'priority', 
        'sub_category_description',
        'sub_category_icon',
        'premium',
    ];
}