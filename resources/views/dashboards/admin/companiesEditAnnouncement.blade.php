@extends('dashboards.admin.layout')
@section('title', 'Admin | Edit announce')

@section('content')
<div class="flex-1 p-8 overflow-y-auto">
    <h1 class="text-3xl font-bold mb-4">Edit announce</h1>
    <a href="{{ route('admin.companies.announcements' , ['id' => $announce->company_id ]) }}" class="mb-3 inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Back to Announcement</a>
    <div class="flex-1 p-8 overflow-y-auto">
        <div class="bg-white rounded-lg shadow-xl p-8">
            <h4 class="text-xl text-gray-900 font-bold mb-6">Edit Company announce</h4>
            <div class="container mx-auto mt-10 p-6 bg-gray-100 rounded-lg shadow-lg">
                <form action="{{ route('admin.companies.updateAnnounce', $announce->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ ucwords($announce->title) }}</h1>

                    <div class="mb-6">
                        <label for="title" class="text-xl font-semibold">Title</label>
                        <input type="text" name="title" id="title"
                            class="border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring-gray-500 w-full"
                            value="{{ $announce->title }}">
                    </div>

                    <div class="mb-6">
                        <label for="description" class="text-xl font-semibold">Description</label>
                        <textarea name="description" id="description"
                            class="border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring-gray-500 w-full">{{ $announce->description }}</textarea>
                    </div>

                    <div class="mb-6">
                        <label for="skills" class="text-xl font-semibold">Skills</label>
                        <input type="text" name="skills" id="skills"
                            class="border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring-gray-500 w-full"
                            value="{{ $announce->skills }}">
                    </div>

                    <div class="mb-6">
                        <label for="benefits" class="text-xl font-semibold">Benefits</label>
                        <input type="text" name="benefits" id="benefits"
                            class="border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring-gray-500 w-full"
                            value="{{ $announce->benefits }}">
                    </div>

                    <div class="mb-6">
                        <label for="contact" class="text-xl font-semibold">Contact</label>
                        <input type="text" name="contact" id="contact"
                            class="border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring-gray-500 w-full"
                            value="{{ $announce->contact }}">
                    </div>

                    <div class="mt-8 flex justify-end space-x-4">
                        <button type="submit"
                            class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50 transition-colors duration-300">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


