@extends('dashboards.layout')
@section('title', 'Company | Profile')
@section('content')
    <div class="flex h-screen ">
        <div class=" w-16 border-r border-gray-100 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">
            <x-sidebar-company />
        </div>
        @php
            $company = $companies->firstWhere('email', Auth::user()->email);
        @endphp

        <div class="flex-1 p-8 overflow-y-auto">
            <div class="">
                <div class="w-full h-[250px]">
                    <img src="https://th.bing.com/th/id/R.97df7d3439753a3ede2a8fb97d70ef07?rik=MIDuHimlVHI%2fGw&riu=http%3a%2f%2fwallpapercave.com%2fwp%2fnCJZmyI.jpg&ehk=QXQ1pZXc9fIth2BMGRjDiA2uuHgL4kAKfJKjagFp988%3d&risl=&pid=ImgRaw&r=0"
                        class="w-full h-full rounded-tl-lg rounded-tr-lg">
                </div>
                <div class="flex flex-col items-center -mt-20">
                    <img src="{{ asset('storage/'. $company->company_image) }}"
                        class="w-40 border-4 border-white rounded-full">
                    <div class="flex items-center space-x-2 mt-2">
                        <p class="text-2xl">{{ $company->username }}</p>
                        <span class="bg-blue-500 rounded-full p-1" title="Verified">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-100 h-2.5 w-2.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <p class="text-sm text-gray-500">{{ $company->address }}</p>
                </div>


                <div class="flex-1 flex flex-col items-center lg:items-end justify-end px-8 mt-2">
                    <div class="flex  items-center space-x-4 mt-2">
                        <button
                            class="flex items-center bg-gray-600 hover:bg-gray-700 text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                            <i class="fas fa-edit"></i>
                            <a href="{{ route('company.editProfile', ['id' => $company->id]) }}" class="text-gray-100">
                                <span>Edit</span>
                            </a>
                        </button>
                        <div class="flex items-center justify-center flex-col space-y-4">
                            <label for="file-upload"
                                class="relative cursor-pointer bg-gray-600 hover:bg-gray-700 text-gray-100 px-4 py-2 rounded text-sm transition duration-100">
                                <div class="flex items-centre justify-center"> <i class="fas fa-camera mt-1 pr-1"></i>
                                    <span>Update</span>
                                </div>
                                <form action="{{ route('company.updateImage', $company->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input id="file-upload" name="company_image" type="file" class=" sr-only">
                                    <button type="submit">Upload</button>
                                </form>
                    </label>
                    </div>
                        <form action="{{route('company.profile.destroy' ,  $company->id)}}" method="POST">
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
                        <span class="font-bold w-32">Company name</span>
                        <span class="text-gray-700">{{ $company->company_name }}</span>
                    </li>
                    <li class="flex border-b py-2">
                        <span class="font-bold w-32">Contact name</span>
                        <span class="text-gray-700">{{ $company->contact_name }}</span>
                    </li>
                    <li class="flex border-b py-2">
                        <span class="font-bold w-32">Joined</span>
                        <span class="text-gray-700">{{ $company->created_at }}</span>
                    </li>
                    <li class="flex border-b py-2">
                        <span class="font-bold w-32">Mobile</span>
                        <span class="text-gray-700">{{ $company->phone_number }}</span>
                    </li>
                    <li class="flex border-b py-2">
                        <span class="font-bold w-32">Email</span>
                        <span class="text-gray-700">{{ $company->email }}</span>
                    </li>
                    <li class="flex border-b py-2">
                        <span class="font-bold w-32">Location</span>
                        <span class="text-gray-700">{{ $company->address }}</span>
                    </li>
                    <li class="flex border-b py-2">
                        <span class="font-bold w-32">Last Update</span>
                        <span class="text-gray-700">{{ $company->updated_at }}</span>
                    </li>
                </ul>
            </div>

            <div class="flex-1 bg-white rounded-lg shadow-xl mt-4 p-8">
                <h4 class="text-xl text-gray-900 font-bold">Settings :</h4>
                <div class="relative px-4 py-8 bg-white">
                    <div class="max-w-2xl mx-auto">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Settings</h2>
                        <form class="space-y-6" action="{{ route('company.updatePassword', ['id' => $company->id]) }}"
                            method="POST">
                            @csrf
                            @method('PUT')
                            <div class="relative">
                                <label for="current-password" class="block font-medium text-gray-700 mb-2">Current
                                    Password</label>
                                <input type="password" id="current-password" name="current_password"
                                    autocomplete="current-password" required
                                    class="block w-full px-4 py-3 pr-10 text-gray-900 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer"
                                    onclick="togglePasswordVisibility('current-password', this)">
                                    <i class="fas fa-eye pt-8 text-gray-600"></i>
                                </div>
                                @error('current_password')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="relative">
                                <label for="new-password" class="block font-medium text-gray-700 mb-2">New Password</label>
                                <input type="password" id="new-password" name="new_password" autocomplete="new-password"
                                    required
                                    class="block w-full px-4 py-3 pr-10 text-gray-900 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer"
                                    onclick="togglePasswordVisibility('new-password', this)">
                                    <i class="fas fa-eye pt-8 text-gray-600"></i>
                                </div>
                                @error('new_password')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="relative">
                                <label for="confirm-password" class="block font-medium text-gray-700 mb-2">Confirm
                                    Password</label>
                                <input type="password" id="confirm-password" name="new_password_confirmation"
                                    autocomplete="new-password" required
                                    class="block w-full px-4 py-3 pr-10 text-gray-900 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer"
                                    onclick="togglePasswordVisibility('confirm-password', this)">
                                    <i class="fas fa-eye pt-8 text-gray-600"></i>
                                </div>
                                @error('new_password_confirmation')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <button type="submit"
                                    class="w-full px-4 py-3 font-medium text-white bg-gray-600 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:text-sm">
                                    Save Changes
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        function togglePasswordVisibility(id, icon) {
            const input = document.getElementById(id);
            if (input.type === "password") {
                input.type = "text";
                icon.innerHTML = '<i class="fas fa-eye-slash pt-8 text-gray-600"></i>';
            } else {
                input.type = "password";
                icon.innerHTML = '<i class="fas fa-eye pt-8 text-gray-600"></i>';
            }
        }
    </script>
@endsection
