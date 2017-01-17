<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Twoot extends Model
{
    public $table = 'twoots';

    public $fillable = [
        'text'
    ];
}
