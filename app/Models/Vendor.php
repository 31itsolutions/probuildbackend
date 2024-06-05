<?php

namespace App\Models;

use App\Models\Package;


use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    use App\Notifications\Vendor\ResetPasswordNotification;

    class Vendor extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'vendor';

        protected $fillable = [
            'name', 'email', 'password','number', 'lname','account_status','pakage','verified_vendor','vendor_document','area','city',
            'province','coubntry','profile_image','active_count',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

            /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }


    public function businesses()
    {
        return $this->hasMany(Business::class);
    }

    public function packages()
    {
        return $this->belongsToMany( Package::class,  'package_vendor')->withPivot( 'starts_date','Approval', 'ends_date');
    }




}