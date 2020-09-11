<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    //
    public $timestamps = false;
    public $table = 'Persons';
    protected $guarded = [];
}
