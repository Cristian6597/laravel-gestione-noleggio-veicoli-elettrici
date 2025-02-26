@extends('layouts.app')

@section('content')
    <div class="">
        <h1 class="text-4xl font-bold">{{ $vehicles->model }}</h1>
    </div>
    <ul>
        <div class="">
            <li>
                <p>Type: {{ $vehicles->type }}</p>
            </li>
        </div>
        <div class="">
            <li>
                <p>Battery capacity: {{ $vehicles->battery_capacity }}</p>
            </li>
        </div>
        <div class="">
            <li>
                <p>Status: {{ $vehicles->status }}</p>
            </li>
        </div>
        <div class="">
            <li>
                <p>Hourly rate: {{ $vehicles->hourly_rate }}</p>
            </li>
        </div>
    </ul>
    <div class="">
        <a href="{{ url('/vehicles') }}" class="text-blue-500 underline hover:text-blue-600">Back</a>
    @endsection
