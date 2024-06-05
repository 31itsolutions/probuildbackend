<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [

    'product_name', 
    'product_price_from',
    'product_price_to', 
    'product_description',
    'product_image',
    


];
public function business()
{
    return $this->belongsTo(Business::class);
}
}
