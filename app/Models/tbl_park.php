<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_park extends Model
{
    use HasFactory;

    protected $fillable =[
        'park_id',
        'type',
        'car_id',
        'park_status',
        'day_amount'
    ];

    public function rent(){

        return $this->hasOne(tbl_user::class,'username','username');
    }
}
