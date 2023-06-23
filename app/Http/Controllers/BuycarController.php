<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car_sell;
use App\Models\Car_brand;
use App\Models\Car_type;
use App\Models\Car_fuel_type;

class BuycarController extends Controller
{
    public function index()
    {
        $car=Car_sell::all();
        $brands = Car_brand::all();
        $fuels = Car_fuel_type::all();
        $types = Car_type::all();
        return view('user.cars',compact('car','brands','fuels','types'));
    }
}
