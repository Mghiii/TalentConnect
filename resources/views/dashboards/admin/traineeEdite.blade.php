@extends('dashboards.admin.layout')
@section('title', 'Admin | Edit trainee')

@section('content')
<div class="container mx-auto p-4 h-screen">
    <h1 class="text-3xl font-bold mb-4">Edit trainee</h1>
    <a href="{{ route('admin.trainees') }}" class="mb-3 inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Back to Dashboard</a>
    <form action="{{route('admin.trainee.update' , $trainee->id)}}" method="post" class="max-w-md mx-auto grid grid-cols-2 gap-4">
        @csrf
        @method('PUT')
        <div class="mb-4 col-span-2">
            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Trainee Name</label>
            <input type="text" id="username" name="username"value="{{ $trainee->username }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
                @error('username')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-4">
            <label for="first_name" class="block text-gray-700 text-sm font-bold mb-2">first name</label>
            <input type="text" id="first_name" name="first_name" value="{{ $trainee->first_name }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
                @error('first_name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-4">
            <label for="last_name" class="block text-gray-700 text-sm font-bold mb-2">last name</label>
            <input type="text" id="last_name" name="last_name" value="{{ $trainee->last_name }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
                @error('last_name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-4">
            <label for="phone_number" class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
            <input type="number" id="phone_number" name="phone_number" value="{{ $trainee->phone_number }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
                @error('phone_number')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-4">
            <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
            <input type="text" id="address" name="address" value="{{ $trainee->address }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
                @error('address')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-4">
            <label for="domain" class="block text-gray-700 text-sm font-bold mb-2">Domain</label>
            <input type="text" id="domain" name="domain" value="{{ $trainee->domain }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
                @error('domain')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
        </div>
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded col-span-2 focus:outline-none focus:ring focus:ring-blue-500">Save
            Changes</button>
    </form>
</div>
@endsection


