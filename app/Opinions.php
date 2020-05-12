<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinions extends Model
{
    protected $fillable = [
    	'title', 'rating', 'description', 'name', 'who'
    ];
}
