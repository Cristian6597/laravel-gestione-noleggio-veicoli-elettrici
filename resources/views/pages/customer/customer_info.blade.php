@extends('layouts.app')

@section('content')
    <div class="title">
        <p class="text-3xl font-bold">Info</p>
    </div>
    <div class="">
        <h1 class="text-xl font-bold"> Name: {{ $customers->name }}</h1>
    </div>
    <ul>
        <div class="">
            <li>
                <p>Email: {{ $customers->email }}</p>
            </li>
        </div>
        <div class="">
            <li>
                <p>Phone: {{ $customers->phone }}</p>
            </li>
        </div>
        <div class="">
            <li>
                <p>License number: {{ $customers->license_number }}</p>
            </li>
    </ul>
    <div class="">
        <a href="{{ url('/customers') }}" class="text-blue-500 underline hover:text-blue-600">Back</a>
    @endsection
