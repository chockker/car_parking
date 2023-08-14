<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_rent extends Model
{
    use HasFactory;

    protected $fillable =[
        'username',
        'park_id',
        'date_rent',
        'type'
    ];
}
