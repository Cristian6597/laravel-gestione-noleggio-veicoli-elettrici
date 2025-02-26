@extends('layouts.app')

@section('content')
    <div class="justify-center w-full">
        <p class="w-full mb-10 text-3xl font-bold text-center">Vehicles</p>
    </div>
    <div class="flex justify-end w-full">
        <a class="w-64 px-4 py-2 mb-10 font-bold text-center text-white bg-black rounded cursor-pointer"
            href="{{ url('/vehicle/new_vehicle') }}">
            +
            Add
            New Vehicle</a>

    </div>
    <div class="w-full h-full list">
        <ul class="flex flex-wrap justify-center">
            @foreach ($vehicles as $vehicle)
                <div class="max-w-sm mb-5 overflow-hidden rounded shadow-lg">
                    <div class="px-6 py-4">
                        <li>
                            <p class="text-2xl font-bold"> {{ $vehicle->model }}</p>
                        </li>
                        <p class="text-base text-gray-700">
                            {{ $vehicle->type }}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">Battery
                            capacity: {{ $vehicle->battery_capacity }}</span>
                        <span
                            class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">Status:
                            {{ $vehicle->status }}</span>
                        <span
                            class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">Hourly
                            rate: {{ $vehicle->hourly_rate }}</span>
                        <div class="flex justify-end w-full">
                            <a href="{{ url('/vehicles/' . $vehicle->id) }}"
                                class="text-blue-500 underline hover:text-blue-600">See more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </ul>
        <div class="">
            <a class ="text-3xl font-bold text-center" href="{{ url('/') }}"
                class="text-blue-500 underline hover:text-blue-600">Back</a>
        </div>
    </div>
@endsection
