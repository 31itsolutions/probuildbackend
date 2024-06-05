<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'background_image', 
        'centered_image',
        'sub_category',
        'place', 
    ];
}
