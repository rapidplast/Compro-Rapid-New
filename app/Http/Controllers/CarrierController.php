<?php

namespace App\Http\Controllers;

use App\Models\Carrier;
use Illuminate\Http\Request;

class CarrierController extends Controller
{
    public function carrier(){
        $carriers = Carrier::all();
        return view('Carrier.carrier', compact('carriers'));
    }

    public function see_more($id){
        $carrier = Carrier::find($id);
        return view('Admin.carrier_see_more', compact('carrier'));
    }
}
