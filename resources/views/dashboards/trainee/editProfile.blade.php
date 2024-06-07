@extends('dashboards.layout')
@section('title', 'Trainee | Edit Profile')
@section('content')
    <div class="flex h-screen ">
        <div class="w-16 border-r border-gray-100 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">
            <x-sidebar-trainee :trainee="$trainee" />
        </div>

        <div class="flex-1 p-8 overflow-y-auto">
            <div class="">
                <div class="w-full h-[250px]">
                    <img src="https://th.bing.com/th/id/R.97df7d3439753a3ede2a8fb97d70ef07?rik=MIDuHimlVHI%2fGw&riu=http%3a%2f%2fwallpapercave.com%2fwp%2fnCJZmyI.jpg&ehk=QXQ1pZXc9fIth2BMGRjDiA2uuHgL4kAKfJKjagFp988%3d&risl=&pid=ImgRaw&r=0"
                        class="w-full h-full rounded-tl-lg rounded-tr-lg">
                </div>
                <div class="flex flex-col items-center -mt-20">
                    <img src="{{ asset('storage/' . $trainee->trainee_image) }}"
                    class="w-40 h-40 border-4 border-white rounded-full object-cover">
                    <div class="flex items-center space-x-2 mt-2">
                        <p class="text-2xl">{{ ucwords($trainee->username) }}</p>
                    </div>
                    <p class="text-sm text-gray-500">{{ ucwords($trainee->address) }}</p>
                </div>

                <div class="flex-1 flex flex-col items-center lg:items-end justify-end px-8 mt-2">
                    <div class="flex items-center space-x-4 mt-2">
                        <form action="{{ route('trainee.profile.image.update', $trainee->id) }}" method="POST"
                            enctype="multipart/form-data" id="imageForm" class="flex items-center">
                            @csrf
                            @method('PUT')
                            <label for="file-upload"
                                class="flex items-center cursor-pointer bg-gray-600 hover:bg-gray-700 text-gray-100 px-4 py-2 rounded text-sm transition duration-100">
                                <i class="fas fa-camera mt-1 pr-1"></i>
                                <span>Update</span>
                                <input id="file-upload" name="trainee_image" type="file" class="sr-only"
                                    onchange="document.getElementById('imageForm').submit()">
                            </label>
                        </form>

                        <form action="{{ route('trainee.profile.destroy', $trainee->id) }}" method="POST">
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

            <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                <h4 class="text-xl text-gray-900 font-bold">Personal Info :</h4>
                <ul class="mt-2 text-gray-700">
                    <li class="flex border-y py-2">
                        <span class="font-bold w-32">Full Name</span>
                        <span class="text-gray-700">{{ ucwords($trainee->username) }}</span>
                    </li>
                    <li class="flex border-b py-2">
                        <span class="font-bold w-32">Email</span>
                        <span class="text-gray-700">{{ $trainee->email }}</span>
                    </li>
                    <li class="flex border-b py-2">
                        <span class="font-bold w-32">Joined</span>
                        <span class="text-gray-700">{{ $trainee->created_at->format('d M Y') }}</span>
                    </li>
                    <li class="flex border-b py-2">
                        <span class="font-bold w-32">Mobile</span>
                        <span class="text-gray-700">{{ $trainee->phone_number }}</span>
                    </li>
                    <li class="flex border-b py-2">
                        <span class="font-bold w-32">Location</span>
                        <span class="text-gray-700">{{ ucwords($trainee->address) }}</span>
                    </li>
                </ul>
            </div>

            <div class="flex-1 bg-white rounded-lg shadow-xl mt-4 p-8">
                <h4 class="text-xl text-gray-900 font-bold">Settings :</h4>
                <div class="relative px-4 py-8 bg-white">
                    <div class="max-w-2xl mx-auto">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Settings</h2>
                        <form class="space-y-6" action="{{ route('trainee.updateProfile', $trainee->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="relative">
                                <label for="username" class="block font-medium text-gray-700 mb-2">Username</label>
                                <input type="text" id="username" name="username" value="{{ $trainee->username }}"
                                    required
                                    class="block w-full px-4 py-3 pr-10 text-gray-900 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                                @error('username')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="relative">
                                <label for="first_name" class="block font-medium text-gray-700 mb-2">First name</label>
                                <input type="text" id="first_name" name="first_name" value="{{ $trainee->first_name }}"
                                    required
                                    class="block w-full px-4 py-3 pr-10 text-gray-900 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                                @error('first_name')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>



                            <div class="relative">
                                <label for="last_name" class="block font-medium text-gray-700 mb-2">Last name</label>
                                <input type="text" id="last_name" name="last_name" value="{{ $trainee->last_name }}"
                                    required
                                    class="block w-full px-4 py-3 pr-10 text-gray-900 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                                @error('last_name')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="relative">
                                <label for="email" class="block font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" id="email" name="email" value="{{ $trainee->email }}" required
                                    class="block w-full px-4 py-3 pr-10 text-gray-900 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                                @error('email')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <label for="domain" class="block font-medium text-gray-700 mb-2">Domain</label>
                                <input type="text" id="domain" name="domain" value="{{ $trainee->domain }}"
                                    required
                                    class="block w-full px-4 py-3 pr-10 text-gray-900 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                                @error('domain')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="relative">
                                <label for="phone_number" class="block font-medium text-gray-700 mb-2">Phone</label>
                                <input type="text" id="phone_number" name="phone_number"
                                    value="{{ $trainee->phone_number }}"
                                    class="block w-full px-4 py-3 pr-10 text-gray-900 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                                @error('phone_number')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="relative">
                                <label for="address" class="block font-medium text-gray-700 mb-2">Address</label>
                                <input type="text" id="address" name="address" value="{{ $trainee->address }}"
                                    class="block w-full px-4 py-3 pr-10 text-gray-900 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                                @error('address')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <button type="submit"
                                    class="block w-full px-4 py-3 bg-blue-500 text-white font-semibold rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:text-sm">
                                    Update Profile
                                </button>
                                <br>
                                <button type="submit"
                                    class="block w-full px-4 py-3 bg-gray-500 text-white font-semibold rounded-md shadow hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:text-sm">
                                    <a href="{{ route('trainee.profile') }}">Back</a>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
