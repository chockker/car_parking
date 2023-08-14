<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_car extends Model
{
    use HasFactory;

    protected $fillable =[
        'car_id',
        'username',
        'date_in',
        'date_out'
    ];

    // public function user(){
    //     //join 2 ตารางแบบEloquent (Moldel::class,'','')
    //     return $this->hasOne(User::class,'id','user_id');
    // }
}
