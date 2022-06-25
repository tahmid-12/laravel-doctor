<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    function redirect(){

        if(Auth::id()){

            if(Auth::user()->usertype == '0'){
                $doctor = Doctor::all();
                return view('user.home', compact('doctor'));
            }else{
                return view('admin.home');
            }

        }else{
            return redirect()->back();
        }
    }

    function index(){

        if(Auth::id()){
            return redirect('home');
        }else{
            $doctor = Doctor::all();
            return view('user.home', compact('doctor'));
        }
        
    }

    function appointment(Request $request){
        $data = new Appointment;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->number;
        $data->message=$request->message;
        $data->doctor = $request->doctor;
        $data->status = 'In Progress';
        if(Auth::id()){
            $data->user_id=Auth::user()->id;
        }
        $data->save();

        return redirect()->back();
    }
}
