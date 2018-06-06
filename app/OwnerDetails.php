<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OwnerDetails extends Model
{
    protected $fillable = [
        'name' , 'email' , 'contact' , 'profile_pic_url'
    ];
}
