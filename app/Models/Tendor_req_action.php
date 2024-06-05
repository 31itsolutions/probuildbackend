<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tendor_req_action extends Model
{
    use HasFactory;

        protected $fillable = [
        'tendor_req_id', 
        'vendor_req_id', 
        'req_action',
        'tendor_req_removed',
    ];
}
