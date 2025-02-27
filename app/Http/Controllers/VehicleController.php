<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = DB::table('vehicles')->get();
        return view('pages.vehicle.vehicles', ['vehicles' => $vehicles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.vehicle.new_vehicle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = request('model');
        $type = request('type');
        $battery_capacity = request('battery_capacity');
        $status = request('status');
        $hourly_rate = request('hourly_rate');
        DB::table('vehicles')->insert([
        'model' => $model,
        'type' => $type,
        'battery_capacity' => $battery_capacity,
        'status' => $status,
        'hourly_rate' => $hourly_rate
    ]);
    return redirect()->route('vehicles.index')->with('success', 'Vehicle created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vehicles = DB::table('vehicles')->where('id',$id)->first();
        return view('pages.vehicle.vehicles',['vehicles' => $vehicles]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
