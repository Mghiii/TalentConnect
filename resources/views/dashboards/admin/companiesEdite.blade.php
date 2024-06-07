@extends('dashboards.admin.layout')
@section('title', 'Admin | Edit company')

@section('content')
<div class="container mx-auto p-4 h-screen">
    <h1 class="text-3xl font-bold mb-4">Edit Company</h1>
    <a href="{{ route('admin.companies') }}" class="mb-3 inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Back to Dashboard</a>
    <form action="{{route('admin.companies.updateCompany' , $company->id)}}" method="post" class="max-w-md mx-auto grid grid-cols-2 gap-4">
        @csrf
        @method('PUT')
        <div class="mb-4 col-span-2">
            <label for="company_name" class="block text-gray-700 text-sm font-bold mb-2">Company Name</label>
            <input type="text" id="company_name" name="company_name"value="{{ old('company_name', $company->company_name) }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
                @error('company_name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-4">
            <label for="contact_name" class="block text-gray-700 text-sm font-bold mb-2">Contact Name</label>
            <input type="text" id="contact_name" name="contact_name" value="{{ $company->contact_name }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
                @error('contact_name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-4">
            <label for="phone_number" class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
            <input type="number" id="phone_number" name="phone_number" value="{{ $company->phone_number }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
                @error('phone_number')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-4">
            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
            <input type="text" id="username" name="username" value="{{ $company->username }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
                @error('username')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-4">
            <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
            <input type="text" id="address" name="address" value="{{ $company->address }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
                @error('address')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-4">
            <label for="domain" class="block text-gray-700 text-sm font-bold mb-2">Domain</label>
            <input type="text" id="domain" name="domain" value="{{ $company->domain }}"
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


