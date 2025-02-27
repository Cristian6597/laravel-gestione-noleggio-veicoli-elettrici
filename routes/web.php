<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::resource('vehicles', VehicleController::class);


Route::resource('customers', CustomerController::class);


Route::get('/rentals', function () {
    $rentals = DB::table('rentals')->get();
    return view('pages.rental.rentals', ['rentals' => $rentals]);
});

Route::get('/rentals/{id}', function ($id) {
    $rentals = DB::table('rentals')->where('id',$id)->first();
    return view('pages.rental.rentals_info',['rentals' => $rentals]);
});

Route::get('/new_rental', function () {
    return view('pages.rental.new_rental');
});

Route::post('/rental/new_rental_new', function () {
    $vehicle_id = request('vehicle_id');
    $customer_id = request('customer_id');
    $end_time = request('end_time');
    $total_cost = request('total_cost');
    $status = request('status');
    DB::table('rentals')->insert([
        'vehicle_id' => $vehicle_id,
        'customer_id' => $customer_id,
        'end_time' => $end_time,
        'total_cost' => $total_cost,
        'status' => $status
    ]);
    return redirect('/rentals');
});

