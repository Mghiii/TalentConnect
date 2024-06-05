@extends('dashboards.layout')
@section('title', 'Company | Edit Profile')
@section('content')
    <div class="flex h-screen">
        <div class="w-16 border-r border-gray-100 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">
            <x-sidebar-company :company="$company" />
        </div>
        <div class="flex-1 p-8 overflow-y-auto">
            <div class="flex-1 p-8 overflow-y-auto">
                <div class="">
                    <div class="w-full h-[250px]">
                        <img src="https://th.bing.com/th/id/R.97df7d3439753a3ede2a8fb97d70ef07?rik=MIDuHimlVHI%2fGw&riu=http%3a%2f%2fwallpapercave.com%2fwp%2fnCJZmyI.jpg&ehk=QXQ1pZXc9fIth2BMGRjDiA2uuHgL4kAKfJKjagFp988%3d&risl=&pid=ImgRaw&r=0"
                            class="w-full h-full rounded-tl-lg rounded-tr-lg">
                    </div>
                    <div class="flex flex-col items-center -mt-20">
                        <img src="{{ asset('storage/' . $company->company_image) }}"
                            class="w-40 border-4 border-white rounded-full">
                        <div class="flex items-center space-x-2 mt-2">
                            <p class="text-2xl">{{ ucwords($company->username) }}</p>
                            <span class="bg-blue-500 rounded-full p-1" title="Verified">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-100 h-2.5 w-2.5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                        d="M5 13l4 4L19 7">
                                    </path>
                                </svg>
                            </span>
                        </div>
                        <p class="text-sm text-gray-500">{{ ucwords($company->address) }}</p>
                    </div>
                    <div class="flex-1 flex flex-col items-center lg:items-end justify-end px-8 mt-2">
                        <div class="flex items-center space-x-4 mt-2">

                            <form action="{{ route('company.updateImage', $company->id) }}" method="POST"
                                enctype="multipart/form-data" id="imageForm" class="flex items-center">
                                @csrf
                                @method('PUT')
                                <label for="file-upload"
                                    class="flex items-center cursor-pointer bg-gray-600 hover:bg-gray-700 text-gray-100 px-4 py-2 rounded text-sm transition duration-100">
                                    <i class="fas fa-camera mt-1 pr-1"></i>
                                    <span>Update</span>
                                    <input id="file-upload" name="company_image" type="file" class="sr-only"
                                        onchange="document.getElementById('imageForm').submit()">
                                </label>
                            </form>

                            <form action="{{ route('company.profile.destroy', $company->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="flex items-center bg-red-600 hover:bg-red-700 text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                                    <i class="fas fa-trash-alt"></i>
                                    <span>Delete</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-900 font-bold mb-6">Edit Company Profile</h4>
                    <form action="{{ route('company.updateProfile', ['id' => $company->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-6">
                            <label for="company_name" class="block font-medium text-gray-700 mb-2">Company Name</label>
                            <input type="text" name="company_name" id="company_name"
                                class="block w-full p-2 border rounded"
                                value="{{ old('company_name', $company->company_name) }}" required>
                        </div>
                        <div class="mb-6">
                            <label for="contact_name" class="block font-medium text-gray-700 mb-2">Contact Name</label>
                            <input type="text" name="contact_name" id="contact_name"
                                class="block w-full p-2 border rounded"
                                value="{{ old('contact_name', $company->contact_name) }}" required>
                        </div>
                        <div class="mb-6">
                            <label for="domain" class="block font-medium text-gray-700 mb-2">Domain</label>
                            <input type="text" name="domain" id="domain" class="block w-full p-2 border rounded"
                                value="{{ old('domain', $company->domain) }}" required>
                        </div>
                        <div class="mb-6">
                            <label for="phone_number" class="block font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number"
                                class="block w-full p-2 border rounded"
                                value="{{ old('phone_number', $company->phone_number) }}" required>
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" name="email" id="email" class="block w-full p-2 border rounded"
                                value="{{ old('email', $company->email) }}" required>
                        </div>
                        <div class="mb-6">
                            <label for="address" class="block font-medium text-gray-700 mb-2">Address</label>
                            <input type="text" name="address" id="address" class="block w-full p-2 border rounded"
                                value="{{ old('address', $company->address) }}" required>
                        </div>

                        <div class="flex items-center space-x-4">
                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Save</button>
                            <a href="{{ route('company.dashboard.profile') }}"
                                class="text-gray-600 hover:text-gray-900">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
