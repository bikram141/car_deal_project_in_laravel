<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Image;
use Storage;
use App\Models\Car_sell;
use App\Models\Car_brand;
use App\Models\Car_type;
use App\Models\Car_fuel_type;
use App\Models\Multiple_image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index()
    {
        $page_title = 'Latest car List';
        $cars=Car_sell::orderBy('id')->get();
       
        return view('admin.car_details.index',['cars'=>$cars],compact('page_title'));
    }
    public function add()
    {
        $cars =new Car_sell;
        $brands = Car_brand::all();
        $fuels = Car_fuel_type::all();
        $types = Car_type::all();
        $page_title = 'Add New_car'; 
        return view('admin.car_details.add',['cars'=>$cars],compact('page_title','brands','fuels','types'));
    }
    public function create(Request $request)
    {

        if($request->hasfile('images')){
            foreach ($request->file('images') as $image) {
                $name =$image->getClientOriginalName();
                $image->move(public_path().'/image/ss/',$name);
                $cmi[]=$name;
            }
        }
        $cars = new Car_sell;
        $cars->Name=$request->name;
        $cars->Type=$request->type;
        $cars->Year_of_registration=$request->year;
        $cars->Fuel=$request->fuel;
        $cars->Color=$request->color;
        $cars->Model=$request->model;
        $cars->Kilometer_run=$request->kilometer_run;
        $cars->Price=$request->price;
        $cars->Brand=$request->brand;
        if($request->hasfile('Image'))
        {
            $file = $request->file('Image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('carimages/', $filename);
            $cars->Image = $filename;
        }
        $cars->images=json_encode($cmi);
     //dd($cars);
   $cars->save();
    $request->session()->flash('alert-success', 'New car added successfully');
   
    return redirect(route('admin.car'));
    }
    public function edit($id)
    {
        $page_title = 'Edit Car';
        $brands = Car_brand::all();
        $fuels = Car_fuel_type::all();
        $types = Car_type::all();
        $cars = Car_sell::find($id);
        return view('admin.car_details.edit',['cars'=>$cars],compact('page_title','brands','fuels','types'));
    }
    public function update(Request $request)
    {

        if($request->hasfile('images')){
            foreach ($request->file('images') as $image) {
                $name =$image->getClientOriginalName();
                $image->move(public_path().'/image/ss/',$name);
                $cmi[]=$name;
            } 
        }
        $cars = Car_sell::find($request->id);
        if(empty($cmi[0])){
        $cars->Name=$request->name;
        $cars->Type=$request->type;
        $cars->Year_of_registration=$request->year;
        $cars->Fuel=$request->fuel;
        $cars->Color=$request->color;
        $cars->Model=$request->model;
        $cars->Kilometer_run=$request->kilometer_run;
        $cars->Price=$request->price;
        $cars->Brand=$request->brand;
        if($request->hasfile('Image'))
        {
            $destination = 'carimages/'.$cars->Image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('Image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('carimages/', $filename);
            $cars->Image = $filename;
        }
    }else{
        $cars->Name=$request->name;
        $cars->Type=$request->type;
        $cars->Year_of_registration=$request->year;
        $cars->Fuel=$request->fuel;
        $cars->Color=$request->color;
        $cars->Model=$request->model;
        $cars->Kilometer_run=$request->kilometer_run;
        $cars->Price=$request->price;
        $cars->Brand=$request->brand;
        if($request->hasfile('Image'))
        {
            $destination = 'carimages/'.$cars->Image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('Image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('carimages/', $filename);
            $cars->Image = $filename;
        }
        $cars->images=json_encode($cmi);
    }
        
        $cars->update();
        $request->session()->flash('alert-success', 'Car list updated successfully');
        return redirect(route('admin.car'));
    }
    public function destroy(Request $request,$id)
    {
        $cars = Car_sell::find($id);
        $destination = 'carimages/'.$cars->Image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $cars->delete();
        $request->session()->flash('alert-danger',' deleted successfully');
        return redirect(route('admin.car'));
    }


    public function multiple_image()
    {
        $page_title = 'car multiple images List';
        $cmi=Multiple_image::orderBy('id')->get();
        return view('admin.cars_multiple_image.index',['cmi'=>$cmi],compact('page_title'));
    }
//     public function addmultiple_image()
//     {
//         $cmi =new Multiple_image;
//         $carsell = Car_sell::all();
//         $page_title = 'Add car_new_image '; 
//         return view('admin.cars_multiple_image.add',['cmi'=>$cmi],compact('page_title','carsell'));
//     }
//     public function createmultiple_image(Request $request)
//     {
        

//          if($request->hasfile('images')){
//                 foreach ($request->file('images') as $image) {
//                     $name =$image->getClientOriginalName();
//                     $image->move(public_path().'/image/ss/',$name);
//                     $cmi[]=$name;
//                 }
//             }
//         $upload_image = new multiple_image;


//         $upload_image->Car_sells_id=$request->Car_sells_id;
//         $upload_image->images=json_encode($cmi);

//    $upload_image->save();
// // //    dd($cars);
// // $images=array();
// // if($files =$request->file('images')){
// //     foreach ($files as $file) {
// //         $image_name = md5(rand(1000,10000));
// //         $ext=strtolower($file->getClientOriginalExtersion());
// //         $image_full_name->$image_name.'.'.$ext;
// //         $upload_path='public/sideimages/';
// //         $image_url=$upload_path.$image_full_name;
// //         $file->move($upload_path,$image_full_name);
// //         $images[]=$image_url;
// //         $image->car_sells_id = $cars->id;
// //     }
// // }


// //     $something = new Multiple_image;
// //     // foreach ($request->file('images') as $imagefile) {
// //     //     $image = new Image;
// //     //     // $path = $imagefile->move('sideimages/',$image);
// //     //     // $image->url = $path;
// //     //     // $image->car_sells_id = $cars->id;
// //     //     $extention = $image->getClientOriginalExtension();
// //     //     $image = time().'.'.$extention;
// //     //     $image->move('sideimages/', $image);
// //     //     $image->car_sells_id = $cars->id;
        
// //     //   }
// //        $something->images =$request->images;
// //       $cars->multiple_images()->save($something);

//     $request->session()->flash('alert-success', 'New car_images added successfully');
   
//     return redirect(route('admin.multiple_image'));
//     }

    public function destroymultiple_image(Request $request,$id)
    {
        $cmi = Multiple_image::find($id);
        $cmi->delete();
        $request->session()->flash('alert-danger',' deleted successfully');
        return redirect(route('admin.multiple_image'));
    }
    
}
