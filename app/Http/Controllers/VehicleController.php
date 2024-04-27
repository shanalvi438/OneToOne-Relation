<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::with('user')->get();
        return view('vehicles.index', compact('vehicles'));
    }

    public function create(Request $request, $id)
    {   
        $data = User::findOrFail($id);
        // dd($data);
        return view('vehicles.create',compact('data'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'model' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ]);

        // Create a new vehicle
        $vehicle = Vehicle::create([
            'model' => $request->model,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('vehicles.index')->with('success', 'Vehicle created successfully.');
    }
}
