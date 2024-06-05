@extends('dashboards.layout')
@section('title', 'Company | Help centre')
@section('content')
    <style>
        #one {
            background-image: url('https://youthincmag.com/wp-content/uploads/2018/06/company-building-min.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
            border-radius: 2%;
            z-index: 1;
        }

        #one::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.448);
            z-index: -1;
        }
    </style>

    <div class="flex h-screen ">
        <div class="w-16 border-r border-gray-100 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">
            <x-sidebar-company :company="$company" />
        </div>
        <div class="flex-1 p-8 overflow-y-auto" id="one">
            <div class="max-w-3xl mx-auto">
                <header class="mb-12 text-center">
                    <h1 class="text-4xl font-bold text-gray-800">Welcome to Talent<span class="text-gray-500">Connect</span>
                    </h1>
                    <p class="text-gray-600 text-lg">Connecting businesses with top talent</p>
                </header>
                <div class="bg-white rounded-lg shadow-lg p-8 md:p-12">
                    <form action="{{ route('company.dashboard.internships.update', $internship->id) }}" method="POST"
                        enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="certificate" class="block text-gray-700 font-bold mb-2">Certificate:</label>
                            <div class="relative">
                                <input type="file" name="certificate" id="certificate"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500">
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
                                    <i class="fas fa-upload"></i>
                                </div>
                            </div>
                            @error('certificate')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="comment" class="block text-gray-700 font-bold mb-2">Comment:</label>
                            <textarea name="comment" id="comment" rows="5"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500 resize-none h-24"></textarea>
                            @error('comment')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300 ease-in-out">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
