<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tbl_park;
use App\Models\tbl_rent;
use App\Models\tbl_user;

class ParkController extends Controller
{
    public function index(){
        $parking = tbl_park::all();
        $countpark = count(tbl_park::where(
            'park_status','=',0)
            ->get());


        return view('park.index' ,compact('parking','countpark'));
    }

    public function rent($id){
        $rent_park = tbl_park::find($id);

        return view('park.rent',compact('rent_park'));
    }

    public function update(Request $request, $id){


        $request->validate([
            'username'=>'required|max:255'
        ],
        [
            'username.required'=>"กรุณากรอกชื่อของท่าน",
            'username.max'=>"ห้ามป้อนเกิน255ตัวอักษร"
        ]);

        $parks = tbl_park::find($id);
        $rents = new tbl_rent;

        $parks->park_status = 1;
        $parks->type = $request->type;
        $parks->save();

        return redirect()->route('park')->with('success',"จองสำเร็จ");

    }
}
