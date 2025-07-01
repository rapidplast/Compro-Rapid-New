<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function product()
    {
        return view('Product.product'); 
    }
    // public function product_admin()
    // {
    //     $products = product::all();
    //     return view('Admin.product', compact('products'));
    // }
    public function product_admin(Request $request)
    {
        $category = $request->input('category');
        $products = Product::where('category', $category)->get();

        return view('Admin.product', compact('products', 'category'));
    }

    public function tambah_product_admin()
    {
        return view('Admin.create_product');
    }

    public function create_product (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required|in:Personal Care,Pharmacy,Dairly,Adibble Oil,Galon Cap', 
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:10240',
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
        $Product = new product([
            'category' => $request->category,
            'foto' => $photo,
        ]);
        $Product->save();
        session()->flash('success', 'Product created successfully.');

        return redirect()->route('product_admin')->with('success', 'Product created successfully.');
    }
    public function delete(Request $request, $id)
    {
        try {
            $carrier = product::findOrFail($id);
            $carrier->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data.');
        }
    }
}
