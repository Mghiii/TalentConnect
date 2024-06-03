@extends('dashboards.layout')
@section('title', 'Company | Help centre')
@section('content')
    <div class="flex h-screen">
        <div class=" w-16 border-r border-gray-100 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">
            <x-sidebar-company :company="$company"  />
        </div>
        <div class="flex-1 p-8 overflow-y-auto">
            <header class="">
                <h1 class="text-3xl text-gray-800 font-bold">Welcome to Talent<span class="text-gray-500">Connect</span></h1>
                <p class="text-gray-600">Connecting businesses with top talent</p>
            </header>
            <div class="mt-12 flex justify-around md:flex-row flex-col">
                <form action="{{route('company.dashboard.internships.update' , $internship->id)}}" method="POST" enctype="multipart/form-data" class="w-full max-w-lg bg-white p-6 rounded-lg shadow-md">
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label for="certificate" class="block text-gray-700 font-bold mb-2">Certificate:</label>
                        <input type="file" name="certificate" id="certificate" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('certificate')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="comment" class="block text-gray-700 font-bold mb-2">Comment:</label>
                        <textarea name="comment" id="comment" cols="30" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                        @error('comment')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
