<?php

namespace App\Http\Controllers;

use App\Models\inovation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InovationController extends Controller
{
    public function inovation()
    {
        $categories = ['Personal Care', 'Pharmacy', 'Food dan Beverage'];
        $inovation = inovation::all();

        $inovations = [
            'Personal Care' => inovation::where('kategory', 'Personal Care')->get(),
            'Pharmacy' => inovation::where('kategory', 'Pharmacy')->get(),
            'Food dan Beverage' => inovation::where('kategory', 'Food dan Beverage')->get(),
        ];

        return view('inovation.inovation', compact('categories', 'inovations', 'inovation'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategory' => ['required', 'in:Personal Care,Pharmacy,Food dan Beverage'],
            'judul' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
            'keterangan' => 'nullable|string|max:255',
        ], [
            'foto.max' => 'Foto tidak boleh lebih dari 10 MB.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $photo = null;

        if ($request->hasFile('foto')) {
            $photoFile = $request->file('foto');
            $filename = uniqid() . '.' . $photoFile->getClientOriginalExtension();
            $photoFile->storeAs('foto', $filename, 'public');
            $photo = $filename;
        }

        $inovation = new inovation([
            'kategory' => $request->input('kategory'),
            'judul' => $request->input('judul'),
            'foto' => $photo,
            'keterangan' => $request->input('keterangan'),
        ]);

        $inovation->save();

        return redirect()->route('inovation')->with('success', 'Inovation created successfully.');
    }

    public function show()
    {
        $categories = ['Personal Care', 'Pharmacy', 'Food dan Beverage'];

        $inovations = [
            'Personal Care' => inovation::where('kategory', 'Personal Care')->get(),
            'Pharmacy' => inovation::where('kategory', 'Pharmacy')->get(),
            'Food dan Beverage' => inovation::where('kategory', 'Food dan Beverage')->get(),
        ];

        return view('admin.inovation', compact('categories', 'inovations'));
    }

    public function hapus(string $id)
    {
        try {
            $inovation = inovation::findOrFail($id);
            $inovation->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data.');
        }
    }
}
