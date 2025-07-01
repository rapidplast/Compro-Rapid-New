<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QualityController extends Controller
{
    public function quality()
    {
        return view('Quality.quality'); 
    }
}
