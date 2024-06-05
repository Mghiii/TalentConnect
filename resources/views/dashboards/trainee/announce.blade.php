@extends('dashboards.layout')

@section('title', 'Trainee | Dashboard')

@section('content')
    <div class="flex h-screen">
        <!-- Sidebar Section -->
        <div class="w-16 border-r border-gray-100 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">
            <x-sidebar-trainee :trainee="$trainee" />
        </div>

        <!-- Main Content Section -->
        <div class="flex-1 p-10 flex flex-col lg:flex-row space-y-6 lg:space-y-0 lg:space-x-6">
            <!-- Announcement Details -->
            <div class="w-full lg:w-1/2 bg-white shadow-2xl rounded-lg p-8">
                <div class="mb-8 flex items-center">
                    @if ($announce->company)
                        <div class="flex items-center mb-8">
                            <div class="mr-4">
                                <img src="{{ asset('storage/' . $company->company_image) }}"
                                    alt="{{ $company->company_name }} Logo" class="w-12 h-12 rounded-full object-cover">
                            </div>
                            <div class="flex items-center">
                                <h1 class="text-3xl font-bold text-gray-800">{{ ucwords($announce->company->company_name) }}
                                </h1>
                                <span class="bg-blue-500 rounded-full p-1 ml-2" title="Verified">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-100 h-2.5 w-2.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    @else
                        <h1 class="text-3xl font-bold text-gray-800">Company Name Not Available</h1>
                    @endif
                </div>

                <h2 class="text-2xl font-semibold mt-2 text-gray-700">{{ ucwords($announce->title) }}</h2>
                <p class="mb-8 text-gray-600 leading-relaxed">{{ $announce->description }}</p>

                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Skills Required</h3>
                    <div class="flex flex-wrap gap-3">
                        @foreach (explode(',', $announce->skills) as $skill)
                            <span
                                class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200 transition-colors">{{ ucwords(trim($skill)) }}</span>
                        @endforeach
                    </div>
                </div>

                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Benefits</h3>
                    <p class="text-gray-600 leading-relaxed">{{ ucwords($announce->benefits) }}</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Contact Information</h3>
                    <div class="bg-gray-100 rounded-lg p-4">
                        <p class="text-gray-600">{{ ucwords($announce->contact) }}</p>
                    </div>
                </div>
            </div>
            <!-- Offer Submission Form -->
            <div class="w-full lg:w-1/2 bg-white shadow-2xl rounded-lg p-8">
                @php
                    $offre = $offres->firstWhere('trainee_id', $trainee->id);
                    if ($offre) {
                        $offre = $offre->firstWhere('announce_id', $announce->id);
                    }
                @endphp

                @if (!$offre)
                    <form action="{{ route('trainee.dashboard.offre.create') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="CV" class="form-label block font-semibold text-gray-700 mb-2">CV</label>
                            <input type="file" name="CV" id="CV"
                                class="w-full p-3 border rounded-md focus:border-blue-500 focus:ring-blue-500 focus:ring-opacity-50 @error('CV') border-red-500 @enderror">
                            @error('CV')
                                <span class="text-red-400 text-sm mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="motivation_lettre"
                                class="form-label block font-semibold text-gray-700 mb-2">Motivation Letter</label>
                            <input type="file" name="motivation_lettre" id="motivation_lettre"
                                class="w-full p-3 border rounded-md focus:border-blue-500 focus:ring-blue-500 focus:ring-opacity-50 @error('motivation_lettre') border-red-500 @enderror">
                            @error('motivation_lettre')
                                <span class="text-red-400 text-sm mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <input type="hidden" value="offer_send" name="status" />
                        <input type="hidden" value="{{ $trainee->id }}" name="trainee_id">
                        <input type="hidden" value="{{ $announce->id }}" name="announce_id">
                        <div class="mt-8">
                            <button type="submit"
                                class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition-colors">Submit</button>
                        </div>
                    </form>
                @else
                    <h1 class="text-2xl font-bold text-center text-gray-800">Offer Sent</h1>
                @endif
            </div>
        </div>
    </div>
@endsection
