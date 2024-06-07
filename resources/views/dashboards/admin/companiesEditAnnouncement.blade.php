@extends('dashboards.admin.layout')
@section('title', 'Admin | Edit announce')

@section('content')
<div class="container mx-auto p-4 h-screen">
    <h1 class="text-3xl font-bold mb-4">Edit announce</h1>
    <a href="{{ route('admin.companies.announcements' , ['id' => $announce->company_id ]) }}" class="mb-3 inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Back to Announcement</a>
    <form action="{{ route('admin.companies.updateAnnounce', $announce->id) }}" method="post" class="max-w-md mx-auto grid grid-cols-2 gap-4">
        @csrf
        @method('PUT')

        <div class="mb-4 col-span-2">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" id="title" name="title" value="{{ $announce->title }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
            @error('title')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
            <input type="text" id="description" name="description" value="{{ $announce->description }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
            @error('description')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="skills" class="block text-gray-700 text-sm font-bold mb-2">Skills</label>
            <input type="text" id="skills" name="skills" value="{{ $announce->skills }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
            @error('skills')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="benefits" class="block text-gray-700 text-sm font-bold mb-2">benefits</label>
            <input type="text" id="benefits" name="benefits" value="{{ $announce->benefits }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
            @error('benefits')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="contact" class="block text-gray-700 text-sm font-bold mb-2">Contact</label>
            <input type="text" id="contact" name="contact" value="{{ $announce->contact }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
            @error('contact')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded col-span-2 focus:outline-none focus:ring focus:ring-blue-500">Save Changes</button>
    </form>

</div>
@endsection


