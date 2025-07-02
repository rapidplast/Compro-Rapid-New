<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUstController extends Controller
{
    public function about_us()
    {
        return view('about_us.About_us'); 
    }
}
