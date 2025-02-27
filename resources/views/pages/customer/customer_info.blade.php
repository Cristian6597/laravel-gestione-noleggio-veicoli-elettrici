@extends('layouts.app')

@section('content')
    <form action="{{ route('customers.destroy', ['customer' => $customers->id]) }}" method="POST">
        @csrf
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
            <a href="{{ route('customers.index') }}" class="text-blue-500 underline hover:text-blue-600">Back</a>
            @method('DELETE')
            <input type="submit" value="delete" class="text-red-500 underline hover:text-red-600"></input>
        </div>
    </form>
@endsection
