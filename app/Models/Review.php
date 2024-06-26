<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;




    protected $fillable = [

        'customer_name', 
        'email',
        'review', 
        'rating',   
        'customer_id'         
    ];


public function business()
{
    return $this->belongsTo(Business::class);
}



}