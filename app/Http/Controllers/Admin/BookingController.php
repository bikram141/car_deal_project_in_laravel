<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $page_title = 'Booking List';
        $bookings=Booking::all();
        return view('admin.booking.index',['bookings'=>$bookings],compact('page_title'));
    }


    public function booked($id)
    {
        $page_title = 'Booking List';
        $bookings=Booking::find($id);
        $bookings->status='Booked';
        $bookings->save();
        return redirect()->back();
    }


    // public function add()
    // {
    //     $designations =new Designation;
    //     $page_title = 'Add Designation';
    //     return view('admin.designation.add',['designations'=>$designations],compact('page_title'));
    // }
    // public function create(Request $request)
    // {
    //     $designations = new Designation;
    //     $designations->designation = $request->designation;
    //     $designations->save();
    //     $request->session()->flash('alert-success', 'designation added successfully');
    //     return redirect(route('admin.designation'));
    // }
    // public function edit($id)
    // {
    //     $page_title = 'Edit Designation';
    //     $designations = Designation::find($id);
    //     return view('admin.designation.edit',['designations'=>$designations],compact('page_title'));
    // }
    // public function update(Request $request)
    // {
    //     $designations = Designation::find($request->id);
    //     $designations->designation = $request->designation;
    //     $designations->save();
    //     $request->session()->flash('alert-success', 'designation list updated successfully');
    //     return redirect(route('admin.designation'));
    // }
    // public function destroy(Request $request)
    // {
    //     $create= Designation::destroy($request->id);
    //     $request->session()->flash('alert-danger',' deleted successfully');
    //     return redirect(route('admin.designation'));
    // }
}
