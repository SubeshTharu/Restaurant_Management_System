<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{

    public function login(){
        return view('auth.login');
    }
    public function registration(){
        return view('auth.registration');
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:15'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $result = $user->save();
        if ($result){
            return back()->with('success', 'You have registered successfully!');
        }
        else{
            return  back()->with('fail','Failed to registered!');
        }
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:15'
        ]);
        $user = User::where('email','=', $request->email)->first();
        if ($user){
            return redirect('book');
        }
        else{
            return back()->with('fail','Please! Register first');
        }
    }

    public function booking(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'date'=>'required',
            'time'=>'required',
            'people'=>'required',
            'message'=>'required',
        ]);
        $book= new Book();
        $book->name = $request->name;
        $book->email = $request->email;
        $book->phone= $request->phone;
        $book->date = $request->date;
        $book->time = $request->time;
        $book->people = $request->people;
        $book->message = $request->message;
        $res = $book->save();
        if ($res){
            return back()->with('success', 'You have booked successfully!');
        }
        else{
            return  back()->with('fail','Failed to booked!');
        }
    }


    public function ordering(Request $request)
    {
        $request->validate([
            'food'=>'required',
            'quantity'=>'required',
        ]);
        $order= new Order();
        $order->food = $request->food;
        $order->quantity = $request->quantity;

        $res = $order->save();
        if ($res){
            return back()->with('success', 'You have ordered successfully!');
        }
        else{
            return  back()->with('fail','Failed to order!');
        }
    }

}


