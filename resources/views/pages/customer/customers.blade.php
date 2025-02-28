@extends('layouts.app')

@section('content')
    <div class="w-full ">
        <p class="w-full mb-10 text-3xl font-bold text-center">Customers</p>
    </div>
    <div class="flex justify-end w-full">
        <a class="w-64 px-4 py-2 mb-10 font-bold text-center text-white bg-black rounded cursor-pointer"
            href="{{ route('customers.create') }}">
            +
            Add
            New Customer</a>

    </div>
    <div class="w-full h-full list">
        <ul class="flex flex-wrap justify-center">
            @foreach ($customers as $customer)
                <div class="max-w-sm mb-5 overflow-hidden rounded shadow-lg">
                    <div class="px-6 py-4">
                        <li>
                            <p class="text-2xl font-bold"> {{ $customer->name }}</p>
                        </li>
                        <p class="text-base text-gray-700">
                            {{ $customer->email }}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">Phone
                            number: {{ $customer->phone }}</span>
                        <span
                            class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">License:
                            {{ $customer->license_number }}</span>
                        <div class="flex justify-end w-full">
                            <a href="{{ route('customers.show', $customer->id) }}"
                                class="text-blue-500 underline hover:text-blue-600">See more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </ul>
        <div class="">
            <a class ="text-3xl font-bold text-center" href="{{ url('/') }}">Back</a>
        </div>
    </div>
@endsection
