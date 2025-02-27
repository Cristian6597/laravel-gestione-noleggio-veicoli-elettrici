@extends('layouts.app')

@section('content')
    <div class="title">
        <h1 class="text-3xl font-bold text-center">Home Page</h1>
    </div>
    <div class="flex flex-row justify-center gap-6 mt-10 options">
        <div class="vehicles">
            <a href="{{ route('vehicles.index') }}"><span class="text-xl font-bold">Vehicles</span></a>
        </div>
        <div class="customers">
            <a href="{{ route('customers.index') }}"><span class="text-xl font-bold">Customers</span></a>
        </div>
        <div class="rentals">
            <a href="{{ url('/rentals') }}"><span class="text-xl font-bold">Rentals</span></a>
        </div>
    </div>
@endsection
