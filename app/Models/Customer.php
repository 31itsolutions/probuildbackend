<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Customer extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'customer';

        protected $fillable = [
            'name', 'email', 'password','lname','number','address_1','address_2', 'city', 'state',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];


        public function tendors()
        {
            return $this->hasMany(Tendor::class);
        }

        public function tendor_requests()
        {
            return $this->hasMany(Tendor_request::class);
        }
    }