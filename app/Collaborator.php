<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    protected $fillable = [
    	'name', 'job', 'country', 'facebook', 'twitter', 'google', 'file'
    ];
}
