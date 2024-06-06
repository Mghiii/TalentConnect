@extends('dashboards.layout')
@section('title', 'Trainee | Search')
@section('content')
    <div class="flex h-screen">
        <div class="w-16 border-r border-gray-100 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">
            <x-sidebar-trainee :trainee="$trainee" />
        </div>
        <div class="flex-1 p-8">
            <header class="mb-8">
                <h1 class="text-3xl text-gray-800 font-bold">Welcome to Talent<span class="text-gray-500">Connect</span></h1>
                <p class="text-gray-600">Connecting businesses with top talent</p>
            </header>
            <section class="flex h-full items-center justify-center">
                <div class="flex flex-col items-center justify-center bg-white mb-80">
                    <!-- Image -->
                    <div class="mb-8">
                        <img src="https://www.creativefabrica.com/wp-content/uploads/2023/05/07/online-assistant-at-work-promotion-Graphics-69042435-1.jpg"
                            alt="Online Assistant at Work" class="w-full h-auto max-h-[500px] object-cover">
                    </div>
                    <!-- Content -->
                    <div class="text-center">
                        <h1 class="text-3xl text-gray-800 font-bold">Talent<span class="text-gray-500">Connect</span></h1>
                        <p class="text-gray-600">Explore premium training programs to elevate your career</p>
                    </div>
                    <!-- Search Bar -->
                    <div class="md:w-[584px] mx-auto mt-7 flex w-[92%] items-center rounded-full border hover:shadow-md">
                        <form action="{{ route('trainee.findSearch') }}" method="GET" class="flex w-full">
                            @csrf
                            <input type="text" class="w-full bg-transparent rounded-full py-[14px] pl-4 outline-none" name="search" placeholder="Search..." />
                            <button type="submit" class="flex items-center justify-center pl-5 pr-4">
                                <i class="fas fa-search mr-2 text-2xl text-gray-500" aria-label="Search"></i>
                            </button>
                        </form>
                    </div>

                </div>
            </section>
        </div>
    </div>
@endsection
