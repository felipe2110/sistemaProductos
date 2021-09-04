<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class companiesController extends Controller
{
    public function index()
    {
        $companies = companies::paginate(8);
        // select * from products
        return view('companies.index', compact('companies'));
    }
    public function create()
    {
        $companies = companies::all();
        return view('companies.create', compact('companies'));
    }
    public function store(Request $request)
    {
        $companies = companies::create([
            'name' => $request->input('name'),
            'nit' => $request->input('nit'),
        ]);
        return redirect('companies')->with('status', 'Se ha creado correctamente');
    }

    public function show($id)
    {
        $companies = companies::find($id);
        return view('companies.show',  compact('companies'));
    }

    public function destroy($id)
    {
        $companies = companies::find($id)->delete();
        return redirect(('companies'))->with('status', 'Se ha eliminado correctamente');
    }
    public function edit($id)
    {
        $companies = companies::find($id);
        return view('companies.edit', compact('companies'));
    }
    public function update(Request $request, $id)
    {
        $companies = companies::find($id)->update([
            'name' => $request->input('name'),
            'nit' => $request->input('nit'),
        ]);
        return redirect('companies')->with('status', 'Se ha actualizado correctamente');
    }
}

