<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    // public function login(Request $request)
    // { 
    //     $this->validator($request);
    //     $credentials = ['email' => $request->email, 'password' => $request->password];  
    //     //attempt login.
    //     if(Auth::guard('admin')->attempt($credentials)){
    //         //Authenticated, redirect to the intended route
    //         //if available else admin dashboard.
    //         return redirect()
    //             ->intended(route('admin.dashboard'))
    //             ->with('alert-success','You are Logged in as Admin!');
    //     }


    //     //Authentication failed, redirect back with input.
    //     return $this->loginFailed();
    // }
    // // public function logout()
    // // {
    // //     Auth::guard('admin')->logout();
    // //     return redirect()
    // //         ->route('admin.login')
    // //         ->with('alert-success','Admin has been logged out!');
    // // }

    // private function validator(Request $request)
    // {
    //     //validation rules.
    //     $rules = [
    //         'email'    => 'required|email|exists:admins|min:5|max:191',
    //         'password' => 'required|string|min:4|max:255',
    //     ];

    //     //custom validation error messages.
    //     $messages = [
    //         'email.exists' => 'These credentials do not match our records.',
    //     ];

    //     //validate the request.
    //     $request->validate($rules,$messages);
    // }
    // private function loginFailed(){
    //     return redirect()
    //         ->back()
    //         ->withInput()
    //         ->with('alert-danger','Login failed, please try again!');
    // }
    // public function username(){
    //     return 'email';
    // }
}
