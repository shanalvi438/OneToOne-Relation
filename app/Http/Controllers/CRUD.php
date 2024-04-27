<?php

namespace App\Http\Controllers;

use App\Models\CRUDS;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CRUD extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('data.create');
        // return view('data.index', ['user' => Auth::user()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $value = new CRUDS;
        $value->data = $request->data;

        $value->save();
        // dd($value);
        Session::flash('success', 'Record Created successfully.');

        return redirect()->route('record.data');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $value = CRUDS::orderBy('id', 'desc')->get();

        return view('data.index',compact('value'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $value = CRUDS::where('id', $id)->first();
        $value = CRUDS::findOrFail($id);
        // dd($value);
        return view('data.edit',compact('value'));
        

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $value = CRUDS::find($id);

        $value->data = $request->data;
        // dd($value);
        $value->update();
        Session::flash('success', 'Record updated successfully.');
        return redirect()->route('record.data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $values = CRUDS::findOrFail($id);

        $values->delete();
        Session::flash('success', 'Record Deleted successfully.');
        return redirect()->route('record.data');
    }
}
