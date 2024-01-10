<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use


class bookingController extends Controller
{
    public function index()
    {
        return view('booking');
    }
}
