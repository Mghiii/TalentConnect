@extends('dashboards.admin.layout')
@section('comment', 'Admin | Edit internship')

@section('content')
<div class="container mx-auto p-4 h-screen">
    <h1 class="text-3xl font-bold mb-4">Edit internship</h1>
    @php
        $trainee = $internship->trainee_id;
    @endphp
    <a href="{{ route('admin.trainee.internships' ,  $trainee ) }}" class="mb-3 inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Back to internshipment</a>
    <form action="{{ route('admin.trainee.updateinternship', $internship) }}" method="post" class="max-w-md mx-auto grid grid-cols-2 gap-4" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Start Date</label>
            <input type="date" id="start_date" name="start_date" value="{{ $internship->start_date }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500" >
            @error('start_date')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="end_date" class="block text-gray-700 text-sm font-bold mb-2">End Date</label>
            <input type="date" id="end_date" name="end_date" value="{{ $internship->end_date }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500" >
            @error('end_date')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="certificate" class="block text-gray-700 text-sm font-bold mb-2">Certificate</label>
            <input type="file" name="certificate" id="certificate" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" >
            @error('certificate')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4 col-span-2">
            <label for="comment" class="block text-gray-700 text-sm font-bold mb-2">Comment</label>
            <input type="text" id="comment" name="comment" value="{{ $internship->comment }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
            @error('comment')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded col-span-2 focus:outline-none focus:ring focus:ring-blue-500">Save Changes</button>
    </form>

</div>
@endsection


