@extends('dashboards.layout')
@section('title', 'Company | Add Trainee')
@section('content')
    @php
        $company = $companies->firstWhere('email', Auth::user()->email);
        $trainee = $offre->trainee;
    @endphp
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
    <div class="flex h-screen">
        <div class="w-16 border-r border-gray-200 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">
            <x-sidebar-company :company="$company" />
        </div>
        <div class="flex-1 p-8 overflow-y-auto " id="one">
            <header class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Welcome to Talent<span class="text-gray-500">Connect</span></h1>
                <p class="text-gray-600 text-lg">Connecting businesses with top talent</p>
            </header>
            <section>
                <div class="mt-12">
                    <form action="{{ route('company.dashboard.internships.create.store', $offre->id) }}" method="post"
                        class="bg-white p-6 rounded-lg shadow-md">
                        @csrf
                        <h1 class="text-xl font-bold mb-4">Company Name: {{ $company->username }}</h1>
                        <h1 class="text-xl font-bold mb-4">Trainee Name: {{ $trainee->username }}</h1>
                        <div class="mb-4">
                            <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Start Date</label>
                            <div class="relative">
                                <input type="text" id="start_date" name="start_date"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500 datepicker"
                                    placeholder="Select start date">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            @error('start_date')
                                <div class="text-red-500 text-xs italic mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="end_date" class="block text-gray-700 text-sm font-bold mb-2">End Date</label>
                            <div class="relative">
                                <input type="text" id="end_date" name="end_date"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500 datepicker"
                                    placeholder="Select end date">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            @error('end_date')
                                <div class="text-red-500 text-xs italic mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="hidden" value="{{ $offre->id }}" name="offre_id">
                        <input type="hidden" value="{{ $company->id }}" name="company_id">
                        <input type="hidden" value="{{ $trainee->id }}" name="trainee_id">
                        <div class="flex items-center justify-between">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-blue-400">
                                Submit
                            </button>
                        </div>
                    </form>
                    @if ($errors->any())
                        <div class="mt-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                            role="alert">
                            <ul class="list-disc pl-4">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </section>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">

    <script>
        var startDatePicker = new Pikaday({
            field: document.getElementById('start_date'),
            format: 'YYYY-MM-DD',
            onSelect: function() {
                this.setInputValue();
            }
        });

        var endDatePicker = new Pikaday({
            field: document.getElementById('end_date'),
            format: 'YYYY-MM-DD',
            onSelect: function() {
                this.setInputValue();
            }
        });
    </script>
@endsection
