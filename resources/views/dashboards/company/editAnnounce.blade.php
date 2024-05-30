@extends('dashboards.layout')
@section('title', 'Company | Dashboard')
@section('content')
    <style>
        .one {
            background-image: url('https://youthincmag.com/wp-content/uploads/2018/06/company-building-min.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
            border-radius: 2%;
            z-index: 1;
        }

        .one::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.448);
            z-index: -1;
        }

        .form {
            background-color: #ffffffcc;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
    <div class="flex h-screen ">

        <div class="w-16 border-r border-gray-100 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">
            <x-sidebar-company />
        </div>


        <div class="flex-1 p-8 overflow-y-auto one">
            <!-- Header -->
            <header class="mb-8">
                <h1 class="text-3xl text-gray-800 font-bold">Welcome to Talent<span class="text-gray-600">Connect</span></h1>
                <p class="text-gray-600">Connecting businesses with top talent</p>
            </header>


            <section>
                <div class="container mx-auto mt-10 p-6 bg-gray-100 rounded-lg shadow-lg">
                    <form action="{{ route('announces.update', $announce->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ ucwords($announce->title) }}</h1>

                        <div class="mb-6">
                            <label for="title" class="text-xl font-semibold">Title</label>
                            <input type="text" name="title" id="title"
                                class="border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring-gray-500 w-full"
                                value="{{ $announce->title }}">
                        </div>

                        <div class="mb-6">
                            <label for="description" class="text-xl font-semibold">Description</label>
                            <textarea name="description" id="description"
                                class="border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring-gray-500 w-full">{{ $announce->description }}</textarea>
                        </div>

                        <div class="mb-6">
                            <label for="skills" class="text-xl font-semibold">Skills</label>
                            <input type="text" name="skills" id="skills"
                                class="border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring-gray-500 w-full"
                                value="{{ $announce->skills }}">
                        </div>

                        <div class="mb-6">
                            <label for="benefits" class="text-xl font-semibold">Benefits</label>
                            <input type="text" name="benefits" id="benefits"
                                class="border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring-gray-500 w-full"
                                value="{{ $announce->benefits }}">
                        </div>

                        <div class="mb-6">
                            <label for="contact" class="text-xl font-semibold">Contact</label>
                            <input type="text" name="contact" id="contact"
                                class="border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring-gray-500 w-full"
                                value="{{ $announce->contact }}">
                        </div>

                        <div class="mt-8 flex justify-end space-x-4">
                            <a href="{{ route('company.dashboard') }}"
                                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition-colors duration-300">
                                Back to Dashboard
                            </a>
                            <button type="submit"
                                class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50 transition-colors duration-300">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

@endsection
