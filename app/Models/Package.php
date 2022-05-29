<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'sale_level',
            'package_name',
            'package_price',
            'discount_price',
            'messages',
            'view_contact',
            'standout_profile',
            'directly_contact',
            'discount_percentage',
            'duration'
        ];
}
