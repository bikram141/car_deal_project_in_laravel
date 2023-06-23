<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment()
    {
        return view('user.payment');
    }
    public function paymenttime()
    {
        return view('user.paymenttime');
    }
}
