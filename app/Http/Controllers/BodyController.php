<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BodyController extends Controller
{
    public function index(){
        return view('auth.index');
    }

    public function special(){
        return view('body.special');
    }

    public function menu(){
        return view('body.menu');
    }

    public function chefs(){
        return view('body.chefs');
    }

    public function about(){
        return view('body.about');
    }

    public function order(){
        return view('body.order');
    }

    public function book(){
        return view('body.book_a_table');
    }
    public function booked(){
        return view('body.booked');
    }

    public function gallary(){
        return view('body.gallary');
    }
}
