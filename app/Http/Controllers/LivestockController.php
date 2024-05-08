<?php

namespace App\Http\Controllers;

use App\Models\Livestock;
use Illuminate\Http\Request;



class LivestockController extends Controller
{
    public function index()
    {
        $livestocks = Livestock::all();
        return view('livestock.index',compact('livestocks'));
    }
    public function create()
    {
        return view('livestock.create');
    }
    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'species'=> 'required',
            'breed'=> 'required',

            // Add Validation rules for other  breeds
        ]);

        Livestock:: create($request->all());

        return redirect()->route('Livestock.index')->with('success','Livestock Updated sucessfully');

    }
    public function destroy(Livestock $livestock)
    {
        $livestock->delete();

        return redirect()->route('Livestock.index')->with('success','Livestock deleted successfully');
    }
}
