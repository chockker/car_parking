<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_user extends Model
{
    use HasFactory;

    protected $fillable =[
        'username',
        'park_id',
        'car_id'
    ];
}
