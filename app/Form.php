<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = ['roll', 'aktivitet', 'sammanhang', 'orsak'];
}
