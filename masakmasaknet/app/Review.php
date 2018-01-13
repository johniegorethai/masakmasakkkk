<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
    	'name',
    	'food_name',
    	'description',
    	'location'
    ];

}