@extends('dashboards.layout')
@section('title', 'Trainee | Dashboard')
@section('content')
    <div class="flex h-screen">
        <div class="w-16 border-r border-gray-100 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">
            <x-sidebar-trainee :trainee="$trainee" />
        </div>
        <div class="flex-1 p-8 overflow-y-auto">
            <header class="mb-8">
                <h1 class="text-3xl text-gray-800 font-bold">Welcome to Talent<span class="text-gray-500">Connect</span></h1>
                <p class="text-gray-600">Connecting businesses with top talent</p>
            </header>
            <div class="mb-8">
                <h2 class="text-xl text-gray-800 font-bold mb-4">Announcements</h2>
                @foreach ($announces as $announce)
                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                        <div class="flex items-center">
                            @if ($announce->company->company_image)
                                <div class="w-16 h-16 rounded-full flex-shrink-0 mr-4">
                                    <img src="{{ asset('storage/' . $announce->company->company_image) }}"
                                        alt="{{ $announce->company->company_name }} Logo"
                                        class="w-full h-full object-cover rounded-full">
                                </div>
                            @else
                                <div class="w-16 h-16 bg-gray-200 rounded-full flex-shrink-0 mr-4"></div>
                            @endif
                            <div>
                                <h3 class="text-lg text-gray-800 font-bold">{{ ucwords($announce->title) }}</h3>
                                <p class="text-gray-500">{{ ucwords($announce->company->company_name) }}</p>
                                <p class="text-gray-600">{{ ucwords($announce->company->address) }}</p>

                            </div>
                        </div>
                        <br>
                        <div class="mt-4">
                            <span class="font-bold text-gray-800 mr-4">Domain </span><br>
                            <span
                                class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium hover:bg-blue-200 transition-colors duration-300 cursor-pointer">{{ ucwords($announce->company->domain) }}</span>
                            <br><br>
                            <span class="font-bold text-gray-800">Description </span>
                            <p class="text-gray-700">{{ ucwords($announce->description) }}</p>
                            <br>
                            <a href="{{ route('trainee.dashboard.offre', $announce->id) }}"
                                class="text-blue-500 hover:text-blue-600 font-bold">View Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
