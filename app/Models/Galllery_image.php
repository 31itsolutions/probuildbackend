<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galllery_image extends Model
{
    use HasFactory;

    public $table = "galllery_images";


    protected $fillable = [
        'gallery_image','business_id' 
    ];







    public function business()
{
    return $this->belongsTo(Business::class);
}



public function setFilenamesAttribute($value)
{
    $this->attributes['gallery_image'] = json_encode($value);
}
}
