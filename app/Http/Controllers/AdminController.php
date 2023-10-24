<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\members;
use App\Models\Registration;



class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.members');
    }

    public function upload(Request $request)
    {
        $members=new members;

        $members->name=$request->name;

        $members->phone=$request->number;

        $members->email=$request->email;

        $members->membership_categories=$request->membership_categories;
        

        $members->save();

        return redirect()->back()->with('message', 'Member added Successfully');
    }


     public function activity()
    {
        return view("admin.activity"); 
    }

     public function home()
    {
        return view("admin.body"); 
    }



    public function index()
    {
       $user = User::find(auth()->id()); // or fetch the user data in a similar way
       $certificates = Certificate::all();

       return view('admin.certificate', compact('user', 'certificates'));
    }

}
