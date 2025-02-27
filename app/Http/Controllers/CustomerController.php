<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = DB::table('customers')->get();
        return view('pages.customer.customers', ['customers' => $customers]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.customer.new_customer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = request('name');
        $email = request('email');
        $phone = request('phone');
        $license_number = request('license_number');
        DB::table('customers')->insert([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'license_number' => $license_number
        ]);
        return redirect()->route('customers.index')->with('success', 'Customer created successfully.'); //da finire il messaggio
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customers = DB::table('customers')->where('id',$id)->first();
        return view('pages.customer.customer_info',['customers' => $customers]);
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
        DB::table('customers')->where('id',$id)->delete();
        return redirect()->route('customers.index');
    }
}
