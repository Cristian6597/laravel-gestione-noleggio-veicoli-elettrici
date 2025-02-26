<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/vehicles', function () {
    $vehicles = DB::table('vehicles')->get();
    return view('pages.vehicle.vehicles', ['vehicles' => $vehicles]);
})->name('home');

Route::get('/vehicles/{id}', function ($id) {
    $vehicles = DB::table('vehicles')->where('id',$id)->first();
    return view('pages.vehicle.show',['vehicles' => $vehicles]);
});

Route::post('/vehicle/new_vehicle_new', function () {
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
    return redirect('/vehicles');
});

Route::get('/customers', function () {
    $customers = DB::table('customers')->get();
    return view('pages.customer.customers', ['customers' => $customers]);
});
Route::get('/customer/{id}', function ($id) {
    $customers = DB::table('customers')->where('id',$id)->first();
    return view('pages.customer.customer_info',['customers' => $customers]);
});

Route::get('/new_customer', function () {
    return view('pages.customer.new_customer');
});

Route::post('/customer/new_customer_new', function () {
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
    return redirect('/customers');
});

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


Route::get('/vehicle/new_vehicle', function () {
    return view('pages.vehicle.new_vehicle');
});
