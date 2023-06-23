<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Image;
use Storage;
use App\Models\Car_brand;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class CarbrandController extends Controller
{
    public function index()
    {
        $page_title = 'Latest car_Brand List';
        $brand=Car_brand::orderBy('id')->get();
       
        return view('admin.car_brand.index',['brand'=>$brand],compact('page_title'));
    }
    public function add()
    {
        $brand =new Car_brand;
        $page_title = 'Add New_brand'; 
        return view('admin.car_brand.add',['brand'=>$brand],compact('page_title','brand'));
    }
    public function create(Request $request)
    {
        $brand = new Car_brand;
        $brand->brand_name=$request->name;
        if($request->hasfile('Image'))
        {
            $file = $request->file('Image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('carbrands/', $filename);
            $brand->Image = $filename;
        }
     //dd($cars);
   $brand->save();
   $request->session()->flash('alert-success', 'New brand added successfully');
   
   return redirect(route('admin.brand'));
    }
    public function edit($id)
    {
        $page_title = 'Edit brand';
        $brand = Car_brand::find($id);
        return view('admin.car_brand.edit',['brand'=>$brand],compact('page_title','brand'));
    }
    public function update(Request $request)
    {
        $brand= Car_brand::find($request->id);
        $brand->brand_name=$request->name;
        if($request->hasfile('Image'))
        {
            $destination = 'carbrands/'.$brand->Image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('Image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('carbrands/', $filename);
            $brand->Image = $filename;
        }
        $brand->update();
        $request->session()->flash('alert-success', 'Brandlist updated successfully');
        return redirect(route('admin.brand'));
    }
    public function destroy(Request $request,$id)
    {
        $brand = Car_brand::find($id);
        $destination = 'carbrands/'.$brand->Image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $brand->delete();
        $request->session()->flash('alert-danger',' deleted successfully');
        return redirect(route('admin.brand'));
    }

}
