<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function dashboard(){
        return view('frontend.dashboard');
    }

    public function softDelete(){
        return view('frontend.softdelete');
    }
}
