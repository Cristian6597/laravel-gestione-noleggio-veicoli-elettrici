@extends('layouts.app')

@section('content')
    <div class="title">
        <p class="w-full mb-2 text-3xl font-bold text-center">New rental</p>
        <p class="w-full mb-10 text-center">Insert new rental</p>
    </div>
    <div class="flex justify-center w-full ">
        <form class ="w-1/3 text-center" action="{{ url('/new_rental_new') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="vehicle_id" class="block mb-2 text-sm font-bold text-gray-700">Vehicle ID:</label>
                <select name="vehicle_id" id="vehicle_id"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected>Select a vehicle id</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="flex flex-col justify-center w-full mb-6 text-center">
                <div class="mb-6 type">
                    <label for="customer_id" class="block mb-2 text-sm font-bold text-gray-700">Customer ID:</label>
                    <select name="customer_id" id="customer_id"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        <option value="" disabled selected>Select a customer id</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="start_time" class="block mb-2 text-sm font-bold text-gray-700">Start time</label>
                    <input type="datetime-local" name="start_time" id="start_time"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <label for="end_time" class="block mb-2 text-sm font-bold text-gray-700">End time</label>
                    <input type="datetime-local" name="end_time" id="end_time"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <label for="total_cost" class="block mb-2 text-sm font-bold text-gray-700">Total Cost</label>
                    <input type="number" name="total_cost" id="total_cost"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <label for="status" class="block mb-2 text-sm font-bold text-gray-700">Status</label>
                    <select name="status" id="status"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        <option value="" disabled selected>Select a status</option>
                        <option value="active">Active</option>
                        <option value="returned">Returned</option>
                    </select>
                </div>
                <div class="flex items-center justify-between w-full">
                    <button class="px-4 py-2 font-bold text-white bg-black rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Create
                    </button>
                    <a href="{{ url('/rentals') }}"
                        class="px-4 py-2 font-bold text-white bg-black rounded focus:outline-none focus:shadow-outline">
                        Back
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection
