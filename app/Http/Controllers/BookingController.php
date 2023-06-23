<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car_sell;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;

class BookingController extends Controller
{
    public function booking()
    {
         $car=Car_sell::all();
        // $car=DB::table('bookings')
        // ->join('car_sells','bookings.car_name','=','car_sells.Name')
        // ->select('bookings.*','car_sells.Kilometer_run','car_sells.Price','car_sells.Image')
        // ->get();
        return view('user.booking',compact('car'));
    }
    public function addbooking(Request $request)
    {
        $data = new Booking;
        $data->Name=$request->name;
        $data->mobile_no=$request->mobile;
        $data->alternative_phone_no=$request->altmobile;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->date=$request->date;
        $data->car_name=$request->booking;
        $data->address=$request->address;
        $data->message=$request->message;
        $data->status='in progress';

        $data->save();
        return redirect(url('paymenttime'))->with('message','Booking request successfully. We will contact with you soon');
    }
}
