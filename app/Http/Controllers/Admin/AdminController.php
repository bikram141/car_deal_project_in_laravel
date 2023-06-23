<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function profile()
    {
        $page_title = 'Profile';
        $admin = Auth::guard('admin')->user();
        return view('admin.profile', compact('page_title', 'admin'));
    }
    public function updateProfile(Request $request)
    {
        $adminId = Auth::guard('admin')->user()->id;

        $validator = Validator::make($request->all(), [
            'user_name'  =>   'required|min:3',
            'email'         => 'required|unique:admins,email,'.$adminId,
        ]);

        if($validator->fails()) {
            $errors = $validator->errors();
            $request->session()->flash('alert-danger', 'Errors! Please correct the following errors and submit again.');
            return back()->withErrors($errors)->withInput();
        }

        $admin = Admin::find($adminId);
        $admin->user_name = $request->user_name;
        $admin->email = $request->email;
        $admin->save();

        $request->session()->flash('alert-success', 'Profile updated successfully.');
        return redirect('admin/profile');
    }

    public function changePassword()
    {
        $page_title = 'Profile';
        $admin = Auth::guard('admin')->user();
        return view('admin.change-password', compact('page_title', 'admin'));
    }

    public function updatePassword(Request $request)
    {
        $adminId = Auth::guard('admin')->user()->id;

        $validator = Validator::make($request->all(), [
                    'current_password' => 'required',
                    'password' => 'required|min:8',
        ]);

        if($validator->fails()) {
            $errors = $validator->errors();

            $request->session()->flash('alert-danger', 'Errors! Please correct the following errors and submit again.');
            return back()->withErrors($errors)->withInput();
        }

        $admin = Admin::find($adminId);

        if(isset($request->current_password) && isset($admin->password) ){

            if (Hash::check($request->current_password, $admin->password)) {
                $admin->password = bcrypt($request->password);
                $admin->save();

                $request->session()->flash('alert-success', 'Password is updated successfully.');
            }else {
                $request->session()->flash('alert-danger', 'Current password is incorrect.');
            }
        }
        return redirect('admin/profile');

        // return redirect('admin/change-password');
    }
}
