<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_name',
        'location',
        'floor_area',
        'rental_fee',
        'other_features',
        'picture'
    ];
}
