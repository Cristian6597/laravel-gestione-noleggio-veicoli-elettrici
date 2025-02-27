@extends('layouts.app')

@section('content')
    <div class="title">
        <p class="w-full mb-2 text-3xl font-bold text-center">New customer</p>
        <p class="w-full mb-10 text-center">Insert new customer</p>
    </div>
    <div class="flex justify-center w-full ">
        <form class ="w-1/3 text-center" action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block mb-2 text-sm font-bold text-gray-700">Name</label>
                <input type="text" name="name" id="name"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
            </div>
            <div class="flex flex-col justify-center w-full mb-6 text-center">
                <div class="mb-6 email">
                    <label for="email" class="block mb-2 text-sm font-bold text-gray-700">Email</label>
                    <input type="email" name="email" id="email"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <label for="phone" class="block mb-2 text-sm font-bold text-gray-700">Phone number</label>
                    <input type="text" name="phone" id="phone"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <label for="license_number" class="block mb-2 text-sm font-bold text-gray-700">Licence number</label>
                    <input type="text" name="license_number" id="license_number"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex items-center justify-between w-full">
                    <button class="px-4 py-2 font-bold text-white bg-black rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Create
                    </button>
                    <a href="{{ route('customers.index') }}"
                        class="px-4 py-2 font-bold text-white bg-black rounded focus:outline-none focus:shadow-outline">
                        Back
                    </a>
                </div>
            </div>


        </form>
    </div>
@endsection
