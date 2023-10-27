<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\registration;

use App\Models\Payment;


use App\Models\Certificate;

class HomeController extends Controller
{
     public function index()
    {
        return view('user.home');
    }

    public function redirects()
    {
        $usertype= Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            return view('dashboard');
        }
    }

    public function about()
    {
        return view("user.about"); 

    }

    public function contact()
    {
        return view("user.contact"); 
    }

    public function media()
    {
        return view("user.media"); 
    }

    
    public function membership()
    {
        return view("user.membership"); 
    }

    public function membershipregistration()
    {
        return view("user.membershipregistration"); 
    }

    public function requirements()
    {
        return view("user.membershiprequirements"); 
    }

    public function categories()
    {
        return view("user.membershipcategories"); 
    }

    public function benefits()
    {
        return view("user.membershipbenefits"); 
 
    }



}


