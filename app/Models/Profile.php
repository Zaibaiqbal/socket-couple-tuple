<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'user_id',
            'city_live',
            'live_family',
            'material_status',
            'diet',
            'height',
            'sub_community',
            'high_education',
            'work_with',
            'designation',
            'salary',
            'current_company',
            'college_name',
            'bio',
            'country_code',
            'mobile_number',
            'disability',
            'blood_group',
            'father_status',
            'mother_status',
            'family_location',
            'native_place',
            'siblings',
            'family_type',
            'family_values',
            'family_affluence',


        ];


    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }


    // visitors

    public function users()
    {
        return $this->belongsTo(User::class);
    }



}

