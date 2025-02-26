@extends('layouts.app')

@section('content')
    <div class="title">
        <p class="w-full mb-2 text-3xl font-bold text-center">New vehicle</p>
        <p class="w-full mb-10 text-center">Insert new vehicle</p>
    </div>
    <div class="flex justify-center w-full ">
        <form class ="w-1/3 text-center" action="{{ url('/new_vehicle_new') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="model" class="block mb-2 text-sm font-bold text-gray-700">Model</label>
                <input type="text" name="model" id="model"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
            </div>
            <div class="flex flex-col justify-center w-full mb-6 text-center">
                <div class="mb-6 type">
                    <label for="type" class="block mb-2 text-sm font-bold text-gray-700">Type</label>
                    <select name="type" id="type"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        <option value="" disabled selected>Select a type</option>
                        <option value="car">Car</option>
                        <option value="scooter">Scooter</option>
                        <option value="bike">Bike</option>
                    </select>
                </div>


                <div class="mb-6">
                    <label for="battery_capacity" class="block mb-2 text-sm font-bold text-gray-700">Battery
                        Capacity</label>
                    <input type="number" name="battery_capacity" id="battery_capacity"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <label for="status" class="block mb-2 text-sm font-bold text-gray-700">Status</label>
                    <select name="status" id="status"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        <option value="" disabled selected>Select a status</option>
                        <option value="available">Available</option>
                        <option value="rented">Rented</option>
                        <option value="maintenance">Maintenance</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="hourly_rate" class="block mb-2 text-sm font-bold text-gray-700">Hourly rate</label>
                    <input type="number" name="hourly_rate" id="hourly_rate"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex items-center justify-between w-full">
                    <button class="px-4 py-2 font-bold text-white bg-black rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Create
                    </button>
                    <a href="{{ url('/vehicles') }}"
                        class="px-4 py-2 font-bold text-white bg-black rounded focus:outline-none focus:shadow-outline">
                        Back
                    </a>
                </div>
            </div>


        </form>
    </div>
@endsection
