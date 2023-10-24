<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\registration;

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

    // public function downloadCertificate($userId)
    // {
    //     $user = User::find($userId);

    //    if (!$user || $user->usertype == 'admin') {
    //     return abort(404); // Handle the case where the user is not found or is an admin
    //     }

    //     $dompdf = new Dompdf();

    //     $html = view('user.certificate', compact('user'));

    //     $dompdf->loadHtml($html);
    //     $dompdf->setPaper('A4', 'portrait');
    //     $dompdf->render();

    //     return $dompdf->stream('certificate.pdf');
    // }

    public function downloadCertificate()
    {
        return view('user.downloadcertificate');
    }



}


