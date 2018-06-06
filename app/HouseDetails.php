<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseDetails extends Model
{
    //
    protected $fillable = [
        'title',
        'address',
        'rent',
        'security',
        'type',
        'category',
        'description',
        'rules',
        'amenities',
        'profile_pic_url',
        'owner_email'
    ];
}
