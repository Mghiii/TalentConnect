@extends('dashboards.layout')
@section('title', 'Trainee | Dashboard')
@section('content')
    <div class="flex h-screen">
        <div class="w-16 border-r border-gray-100 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">
            <x-sidebar-trainee />
        </div>
        <div class="flex-1 p-8 overflow-y-auto">
            <header class="mb-8">
                <h1 class="text-3xl text-gray-800 font-bold">Welcome to Talent<span class="text-gray-500">Connect</span></h1>
                <p class="text-gray-600">Connecting businesses with top talent</p>
            </header>
            <div class="mb-8">
                <h2 class="text-xl text-gray-800 font-bold mb-4">Progress</h2>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="px-6 py-5 border-b border-gray-200">
                        <h2 class="text-lg font-medium text-gray-900">Training Progress</h2>
                    </div>
                    <div class="p-6 space-y-4">
                        @foreach ( $internships as $internship )
                        @if ($internship->certificate)
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">{{$internship->company->username}}</h3>
                                <p class="text-gray-600">{{$internship->offre->announce->title}}</p>
                            </div>
                            <div class="ml-auto">
                                <button
                                    class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-2 px-4 rounded-lg">
                                    Finish
                                </button>
                            </div>
                        </div>

                        @else
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">{{$internship->company->username}}</h3>
                                <p class="text-gray-600">In Progress</p>
                            </div>
                            <div class="ml-auto">
                            </div>
                        </div>

                        @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
