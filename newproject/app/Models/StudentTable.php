<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentTable extends Model
{
    protected $fillable=[
        'name',
        'age',
        'registration_date'
    ];
}
