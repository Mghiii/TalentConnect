@extends('dashboards.layout')
@section('title', 'Company | Dashboard')
@section('content')
@php
            $company = $companies->firstWhere('email', Auth::user()->email);
            $trainee = $offre->trainee;
        @endphp

    <div class="flex h-screen">
        <div class=" w-16 border-r border-gray-100 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">

            <x-sidebar-company  :company="$company"  />
        </div>
        <div class="flex-1 p-8 overflow-y-auto">
            <header class="mb-8">
                <h1 class="text-3xl text-gray-800 font-bold">Welcome to Talent<span class="text-gray-500">Connect</span></h1>
                <p class="text-gray-600">Connecting businesses with top talent</p>
            </header>
            <section>
                <div class="mt-12">
                    <form action="{{ route('company.dashboard.internships.create.store' , $offre->id) }}" method="post" class="bg-white p-6 rounded-lg shadow-md">
                        @csrf
                        <h1 class="text-xl font-bold mb-4">Company Name: {{ $company->username }}</h1>
                        <h1 class="text-xl font-bold mb-4">Trainee Name: {{ $trainee->username }}</h1>
                        <div class="mb-4">
                            <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Start Date</label>
                            <input type="date" id="start_date" name="start_date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('start_date')
                                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="end_date" class="block text-gray-700 text-sm font-bold mb-2">End Date</label>
                            <input type="date" id="end_date" name="end_date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('end_date')
                                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>
                        <input type="hidden" value="{{ $offre->id }}" name="offre_id">
                        <input type="hidden" value="{{ $company->id }}" name="company_id">
                        <input type="hidden" value="{{ $trainee->id }}" name="trainee_id">
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Submit
                            </button>
                        </div>
                    </form>

                    @if ($errors->any())
                        <div class="mt-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>

    </div>


@endsection
