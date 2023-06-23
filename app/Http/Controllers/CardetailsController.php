<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Image;
use App\Models\Car_sell;
use App\Models\Car_brand;
use App\Models\Car_type;
use App\Models\Car_fuel_type;
use App\Models\Multiple_image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class CardetailsController extends Controller
{
    // public function cardetails()
    // {
    //     $car=Car_sell::all();
    //     return view('user.cardetails',compact('car'));
    // }
    public function cardetails($id)
    {
        // $brands = Car_brand::all();
        // $fuels = Car_fuel_type::all();
        // $types = Car_type::all();
        // $car = Car_sell::find($id);
        // return view('user.cardetails',['car'=>$car],compact('brands','fuels','types'));
        //  $data=DB::table('car_sells')
        //  ->join('multiple_images','multiple_images.car_sells_id','=','car_sells.id')
        //  ->select('car_sells.*','multiple_images.images')
        //  ->get();
       $data=Car_sell::find($id);
       $info=Multiple_image::find($id);
        return view('user.cardetails',['car_sell'=>$data]);
    }
}
