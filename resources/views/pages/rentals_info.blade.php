@extends('layouts.app')

@section('content')
    <div class="title">
        <p class="text-3xl font-bold">Info</p>
    </div>
    <div class="">
        <h1 class="text-xl font-bold"> Vehicle ID: {{ $rentals->vehicle_id }}</h1>
    </div>
    <ul>
        <div class="">
            <li>
                <p>Customer ID: {{ $rentals->customer_id }}</p>
            </li>
        </div>
        <div class="">
            <li>
                <p>Start time: {{ $rentals->start_time }}</p>
            </li>
        </div>
        <div class="">
            <li>
                <p>End time: {{ $rentals->end_time }}</p>
            </li>
        </div>
        <div class="">
            <li>
                <p>Total cost: {{ $rentals->total_cost }}</p>
            </li>
        </div>
        <div class="">
            <li>
                <p>Status: {{ $rentals->status }}</p>
            </li>
        </div>
    </ul>
    <div class="">
        <a href="{{ url('/vehicles') }}" class="text-blue-500 underline hover:text-blue-600">Back</a>
    @endsection
