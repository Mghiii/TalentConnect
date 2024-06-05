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
            <x-sidebar-company  :company="$company" />
        </div>


        <div class="flex-1 p-8 overflow-y-auto one">
            <!-- Header -->
            <header class="mb-8">
                <h1 class="text-3xl text-gray-800 font-bold">Welcome to Talent<span class="text-gray-600">Connect</span></h1>
                <p class="text-gray-600">Connecting businesses with top talent</p>
            </header>


            <section>
                <div class="container mx-auto mt-10 p-6 bg-gray-100 rounded-lg shadow-lg">
                    <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ ucwords($announce->title) }}</h1>

                    <div class="mb-6">
                        <h2 class="text-xl font-semibold">Description</h2>
                        <p class="text-gray-700 leading-relaxed">{{ ucwords($announce->description) }}</p>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-xl font-semibold">Skills</h2>
                        <p class="text-gray-700 leading-relaxed">{{ ucwords($announce->skills) }}</p>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-xl font-semibold">Benefits</h2>
                        <p class="text-gray-700 leading-relaxed">{{ ucwords($announce->benefits) }}</p>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-xl font-semibold">Contact</h2>
                        <p class="text-gray-700 leading-relaxed">{{ ucwords($announce->contact) }}</p>
                    </div>


                    <div class="mt-8 flex justify-end space-x-4">
                        <a href="{{ route('company.dashboard') }}"
                            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition-colors duration-300">
                            Back to Dashboard
                        </a>
                        <a href="{{ route('announces.edit', $announce->id) }}"
                            class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition-colors duration-300">
                            Edit
                        </a>
                        <form action="" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition-colors duration-300">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
