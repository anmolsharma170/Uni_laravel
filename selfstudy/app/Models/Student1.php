<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student1 extends Model
{
    protected $fillable = [
        'name',
        'email',
        'age'
    ];
}
