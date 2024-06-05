<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tendor_request extends Model
{
    use HasFactory;





    protected $fillable = [
        'tendor_title', 
        'tendor_description', 
        'category_id', 
        'subcategory_id',
        'sample_image',
    ];




    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    
}
