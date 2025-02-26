<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/vehicles', function () {
    $vehicles = DB::table('vehicles')->get();
    return view('pages.vehicles', ['vehicles' => $vehicles]);
})->name('home');

Route::get('/vehicles/{id}', function ($id) {
    $vehicles = DB::table('vehicles')->where('id',$id)->first();
    return view('pages.show',['vehicles' => $vehicles]);
});

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/customers', function () {
    $customers = DB::table('customers')->get();
    return view('pages.customers', ['customers' => $customers]);
});

Route::get('/rentals', function () {
    $rentals = DB::table('rentals')->get();
    return view('pages.rentals', ['rentals' => $rentals]);
});

Route::get('/rentals/{id}', function ($id) {
    $rentals = DB::table('rentals')->where('id',$id)->first();
    return view('pages.rentals_info',['rentals' => $rentals]);
});

Route::get('/new_customer', function () {
    return view('pages.new_customer');
});
Route::get('/new_vehicle', function () {
    return view('pages.new_vehicle');
});