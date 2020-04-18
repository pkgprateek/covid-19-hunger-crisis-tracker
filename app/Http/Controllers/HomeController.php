<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->username == 'admin')
        {
            return view('home');
        }
        else {
            Auth::logout();
            throw ValidationException::withMessages(['username' => 'Your credentials are not authorized to access this page.']);
        }
    }

    public function distributer()
    {
        $url = "https://recordinfo.typeform.com/to/GePe0y";
        return Redirect::away($url);
    }
    public function powdb()
    {
        $url = "/docs/dashboard_report.pdf";
        return Redirect::away($url);
    }
    
    public function ngo_login()
    {
        if (Auth::user()->username == 'ngo')
        {
            $url = "https://recordinfo.typeform.com/to/EIHbZ3";
            return Redirect::away($url);
        }
        else {
            Auth::logout();
            throw ValidationException::withMessages(['username' => 'These credentials do not NGO login records.']);
        }
    }
    
    public function customLogout()
    {
        Auth::logout();
        return redirect('/');
    }
    
    public function reportDashboard()
    {
        return view('report');
    }
    
}
