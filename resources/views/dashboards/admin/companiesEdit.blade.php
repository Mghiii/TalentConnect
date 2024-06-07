@extends('dashboards.admin.layout')
@section('title', 'Admin | Edit company')
@section('content')
<div class="flex-1 p-8 overflow-y-auto">
    <h1 class="text-3xl font-bold mb-4">Edit Company</h1>
    <a href="{{ route('admin.companies') }}" class="mb-3 inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Back to Dashboard</a>
    <div class="flex-1 p-8 overflow-y-auto">
        <div class="">
            <div class="w-full h-[250px]">
                <img src="https://th.bing.com/th/id/R.97df7d3439753a3ede2a8fb97d70ef07?rik=MIDuHimlVHI%2fGw&riu=http%3a%2f%2fwallpapercave.com%2fwp%2fnCJZmyI.jpg&ehk=QXQ1pZXc9fIth2BMGRjDiA2uuHgL4kAKfJKjagFp988%3d&risl=&pid=ImgRaw&r=0"
                    class="w-full h-full rounded-tl-lg rounded-tr-lg">
            </div>
            <div class="flex flex-col items-center -mt-20">
                <img src="{{ asset('storage/' . $company->company_image) }}" class="w-40 h-40 border-4 border-white rounded-full object-cover">
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-xl p-8">
            <h4 class="text-xl text-gray-900 font-bold mb-6">Edit Company Profile</h4>
            <form action="{{ route('admin.companies.updateCompany', $company->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="mb-6">
                    <label for="company_name" class="block font-medium text-gray-700 mb-2">Company Name</label>
                    <input type="text" name="company_name" id="company_name"
                           class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           value="{{ old('company_name', $company->company_name) }}" >
                    @error('company_name')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="contact_name" class="block font-medium text-gray-700 mb-2">Contact Name</label>
                    <input type="text" name="contact_name" id="contact_name"
                           class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           value="{{ old('contact_name', $company->contact_name) }}" >
                    @error('contact_name')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="domain" class="block font-medium text-gray-700 mb-2">Domain</label>
                    <input type="text" name="domain" id="domain"
                           class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           value="{{ old('domain', $company->domain) }}" >
                    @error('domain')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="phone_number" class="block font-medium text-gray-700 mb-2">Phone Number</label>
                    <input type="text" name="phone_number" id="phone_number"
                           class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           value="{{ old('phone_number', $company->phone_number) }}" >
                    @error('phone_number')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="block font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" name="email" id="email"
                           class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           value="{{ old('email', $company->email) }}" >
                    @error('email')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="address" class="block font-medium text-gray-700 mb-2">Address</label>
                    <input type="text" name="address" id="address"
                           class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           value="{{ old('address', $company->address) }}" >
                    @error('address')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center space-x-4">
                    <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md shadow">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection


