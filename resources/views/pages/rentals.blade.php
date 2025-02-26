@extends('layouts.app')

@section('content')
    <div class="title">
        <p class="w-full mb-10 text-3xl font-bold text-center">Rentals</p>
    </div>
    <div class="w-full h-full list">
        <ul class="flex flex-wrap justify-center">
            @foreach ($rentals as $rental)
                <div class="max-w-sm mb-5 overflow-hidden rounded shadow-lg">
                    <div class="px-6 py-4">
                        <li>
                            <p class="text-2xl font-bold"> Vehicle ID:{{ $rental->vehicle_id }}</p>
                        </li>
                        <p class="text-base text-gray-700">
                            Customer ID: {{ $rental->customer_id }}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">Start
                            time: {{ $rental->start_time }}</span>
                        <span
                            class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">End
                            time:
                            {{ $rental->end_time }}</span>
                        <span
                            class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">Status:
                            {{ $rental->status }}</span>
                        <div class="flex justify-end w-full">
                            <a href="{{ url('/rentals/' . $rental->id) }}"
                                class="text-blue-500 underline hover:text-blue-600">See more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </ul>
        <div class="justify-center w-full">
            <a class ="text-3xl font-bold text-center" href="{{ url('/') }}"
                class="text-blue-500 underline hover:text-blue-600">Back</a>
        </div>
    </div>
@endsection
