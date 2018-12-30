<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function home()
    {
        return view('pages.welcome');
    }
    
    public function customer()
    {
        return view('pages.customer');
    }
    
    public function employee()
    {
        return view('pages.employee');
    }
    
    public function report()
    {
        return view('pages.report');
    }
}
