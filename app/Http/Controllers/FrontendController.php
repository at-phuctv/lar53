<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class FrontendController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }

    public function page()
    {
        return view('frontend.page');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function about()
    {
        return view('frontend.about');
    }
}
