<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Car_sell;
use App\Models\Booking;
use App\Models\Car_brand;

class HomeController extends Controller
{
    public function index()
    {
        //  $book=DB::table('car_sells')
        //  ->join('bookings','car_sells.Name','=','bookings.car_name')
        //  ->select('car_sells.*','bookings.car_name')
        //  ->orderby('created_at','DESC')
        //  ->get();

      
        $car =Car_sell::orderby('created_at','DESC')->get();
        $brand =Car_brand::orderby('created_at','DESC')->get();
        $book=Booking::join('car_sells','bookings.car_name','=','car_sells.Name')->orderby('created_at','DESC')
        ->get('bookings.*','car_sells.Kilometer_run','car_sells.Price','car_sells.Image');
        // $car=Car_sell::all();
        return view('user.home',compact('car','book','brand'));
    }

}
