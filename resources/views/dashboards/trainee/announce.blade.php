@extends('dashboards.layout')
@section('title', 'Trainee | Dashboard')

@section('content')
    <div class="flex h-screen">
        <!-- Sidebar Section -->
        <div class="w-16 border-r border-gray-100 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">
            <x-sidebar-trainee :trainee="$trainee" />
        </div>

        <div class="flex-1 p-10">
            <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
                @if ($announce->company)
                    <h1 class="text-3xl font-bold mb-4">{{ $announce->company->company_name }}</h1>
                @else
                    <h1 class="text-3xl font-bold mb-4">Company Name Not Available</h1>
                @endif
                <h2 class="text-xl font-semibold mb-2">{{ $announce->title }}</h2>
                <p class="mb-4">{{ $announce->description }}</p>

                <div class="mb-4">
                    <h3 class="text-lg font-semibold">Skills Required:</h3>
                    <p>{{ $announce->skills }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-semibold">Benefits:</h3>
                    <p>{{ $announce->benefits }}</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold">Contact Information:</h3>
                    <p>{{ $announce->contact }}</p>
                </div>
            </div>
        </div>
        <div>
            @php
        $offre = $offres->firstWhere('trainee_id', $trainee->id);
        if ($offre) {
            $offre = $offre->firstWhere('announce_id', $announce->id);
        }
@endphp

            @if (!$offre )
            <form action="{{ route('trainee.dashboard.offre.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="form-label block">CV</label>
                    <input type="file" name="CV" class="w-full p-2 border border-gray-300 rounded-md @error('CV') border-red-400 @enderror">
                    @error('CV')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label block">Motivation Letter</label>
                    <input type="file" name="motivation_lettre" class="w-full p-2 border border-gray-300 rounded-md @error('motivation_lettre') border-red-400 @enderror">
                    @error('motivation_lettre')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <input type="hidden" value="offer_send" name="status" />
                <input type="hidden" value="{{ $trainee->id}}" name="trainee_id">
                <input type="hidden" value="{{ $announce->id }}" name="announce_id">
                <div class="mt-3">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">Submit</button>
                </div>
            </form>

            @else
            <h1>offer_send</h1>

            @endif

        </div>
        </div>

    </div>
@endsection

