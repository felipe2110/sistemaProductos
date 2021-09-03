<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\companies;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class productsController extends Controller
{
    public function index()
    {
        $products = products::paginate(8);
        // select * from products
        return view('products.index', compact('products'));
    }
    public function create()
    {
        $companies = companies::all();
        return view('products.create', compact('companies'));
    }
    public function store(Request $request)
    {
        if ($request->hasFile('fileImage')) {
            $file = $request->file('fileImage');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/products/', $filename);
        }
        $products = products::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'precio' => $request->input('price'),
            'image' => $filename,
            'companies_id' => $request->input('companie_id')
        ]);
        return redirect('products')->with('status', 'Se ha creado correctamente');
    }

    public function show($id)
    {
        $products = products::find($id);
        $companies = companies::find($products->companies_id);
        return view('products.show', compact('products'), compact('companies'));
    }

    public function destroy($id)
    {
        $products = products::find($id);
        $destination = 'uploads/products/' . $products->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $products = products::find($id)->delete();
        return redirect(('products'))->with('status', 'Se ha eliminado correctamente');
    }
    public function edit($id)
    {
        $products = products::find($id);
        $companies = companies::all();
        return view('products.edit', compact('products'), compact('companies'));
    }
    public function update(Request $request, $id)
    {
        $products = products::find($id);
        if ($request->hasFile('fileImage')) {

            $destination = 'uploads/products/' . $products->image;

            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('fileImage');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/products/', $filename);
        }
        $products = products::find($id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'precio' => $request->input('price'),
            'image' => $filename,
            'companies_id' => $request->input('companie_id')
        ]);
        return redirect('products')->with('status', 'Se ha actualizado correctamente');
    }
}
