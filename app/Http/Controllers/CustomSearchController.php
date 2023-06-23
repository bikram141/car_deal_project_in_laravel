<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomSearchController extends Controller
{
    function index(Request $request)
    {
        if($request()->ajax()){
            if(!empty($request->fuel))
            {
                $data=DB::table('car_sells')
                ->select('Name','Type','Model','Kilometer_run','Price','Fuel','Year_of_registration','Brand')
                ->where('Fuel',$request->fuel)
                ->where('Price',$request->price)
                ->get();
            }
            else{
                $data=DB::table('car_sells')
                ->select('Name','Type','Model','Kilometer_run','Price','Fuel','Year_of_registration','Brand')
                ->get();
            }
            return datatables()->of($data)->make(true);
        }
        $customer_name=DB::table('car_sells')
        ->select('Fuel')
        ->group('Fuel')
        ->orderBy('Controller','ASC')
        ->get();
        return view('custom_search',compact('customer_name'));

    }
}
