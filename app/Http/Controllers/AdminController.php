<?php

namespace App\Http\Controllers;

use App\Models\Carrier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->input('cari');

        $carrier = Carrier::when($cari, function ($query, $cari) {
            return $query->where('jenis', 'like', "%$cari%")
            ->orWhere('jobdesk', 'like', "%$cari%")->orWhere('kualifikasi', 'like', "%$cari%");
        })->get();

        return view('Admin.product_admin', compact('carrier', 'cari'));
    }

    public function home()
    {
        return view('Home.home');
    }
    public function contact_us()
    {
        return view('Contact Us.contact_us');
    }
    public function about_us()
    {
        return view('about Us.about_us');
    }
    // public function product()
    // {
    //     return view('Product.product');
    // }
    public function sertifikasi()
    {
        return view('Sertifikasi.sertifikasi');
    }
    public function carrier()
    {
        $carriers = Carrier::all();
        return view('Admin.carrier', compact('carriers'));
    }
    public function see_more($id)
    {
        return view('Admin.carrier_see_more');
    }
    
    public function create()
    {
        return view('Admin.create_carrier');
    }
    public function update($id)
    {
        $carrier = Carrier::find($id);
        return view('Admin.update_carrier', compact('carrier'));
    }

    public function createCarrier(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'jenis' => 'required|string|max:255',
            'penempatan' => 'required|string|max:255',
            'jobdesk' => 'required|string|max:255',
            'kualifikasi' => 'required|array',
            'kualifikasi.*' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
        ], [
            'foto.max' => 'Foto tidak boleh lebih dari 10 MB.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $photo = ''; 

        if ($request->hasFile('foto')) {
            $photoFile = $request->file('foto');
            $filename = uniqid() . '.' . $photoFile->getClientOriginalExtension();
            $photoFile->storeAs('foto', $filename, 'public');
            $photo = $filename; 
        }
        
        $kualifikasi = $request->input('kualifikasi');
        $carrier = new Carrier([
            'jenis' => $request->input('jenis'),
            'penempatan' => $request->input('penempatan'),
            'jobdesk' => $request->input('jobdesk'),
            'kualifikasi' => $kualifikasi,
            'foto' => $photo,
        ]);
        $carrier->save();
        session()->flash('success', 'Carrier created successfully.');
        
        return redirect()->route('create')->with('success', 'Carrier created successfully.');
    }

    public function updateCarrier(Request $request, $id)
    {
        $request->validate([
            'jenis' => 'required|string|max:255',
            'penempatan' => 'required|string|max:255',
            'jobdesk' => 'required|string|max:255',
            'kualifikasi' => 'required|array',
            'kualifikasi.*' => 'required|string|max:255',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:10240',
        ], [
            'foto.max' => 'Gambar tidak boleh lebih dari 10 MB.',
        ]);

        $carrier = Carrier::findOrFail($id);

        if ($request->hasFile('foto')) {
            $photo = $request->file('foto');
            $filename = uniqid() . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('foto', $filename, 'public');
            $carrier->foto = $filename;
        }

        $carrier->jenis = $request->jenis;
        $carrier->penempatan = $request->penempatan;
        $carrier->jobdesk = $request->jobdesk;
        $carrier->kualifikasi = ($request->kualifikasi);
        $carrier->save();
        session()->flash('success', 'Carrier created successfully.');

        return redirect()->back()->with('success', 'Carrier updated successfully.');
    }

    public function delete(Request $request, $id)
    {
        try {
            $carrier = Carrier::findOrFail($id);
            $carrier->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data.');
        }
    }
}
