@extends('dashboards.admin.layout')
@section('comment', 'Admin | Edit internship')

@section('content')
<div class="container mx-auto p-4 h-screen">
    <h1 class="text-3xl font-bold mb-4">Edit internship</h1>
    @php
        $company = $internship->company_id;
    @endphp
    <a href="{{ route('admin.companies.internships' ,  $company ) }}" class="mb-3 inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Back to internship</a>
    <form action="{{ route('admin.companies.updateinternship', $internship) }}" method="post" class="max-w-md mx-auto grid grid-cols-2 gap-4"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Start Date</label>
            <input type="date" id="start_date" name="start_date" value="{{ $internship->start_date }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
            @error('start_date')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="end_date" class="block text-gray-700 text-sm font-bold mb-2">End Date</label>
            <input type="date" id="end_date" name="end_date" value="{{ $internship->end_date }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500">
            @error('end_date')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="certificate" class="block text-gray-700 text-sm font-bold mb-2">Certificate</label>
            <input type="file" name="certificate" id="certificate" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500">
            @error('certificate')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4 col-span-2">
            <label for="comment" class="block text-gray-700 font-bold mb-2">Comment:</label>
            <div class="flex space-x-4">
                <label class="radio-label inline-flex items-center justify-center px-4 py-2 border border-gray-300 rounded cursor-pointer transition duration-300">
                    <input type="radio" name="comment" value="favorable" class="radio-input peer hidden">
                    <span class="ml-2">Favorable</span>
                </label>
                <label class="radio-label inline-flex items-center justify-center px-4 py-2 border border-gray-300 rounded cursor-pointer transition duration-300">
                    <input type="radio" name="comment" value="unfavorable" class="radio-input peer hidden">
                    <span class="ml-2">Unfavorable</span>
                </label>
            </div>
            @error('comment')
                <span class="text-red-400 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded col-span-2 focus:outline-none focus:ring focus:ring-blue-500">Save Changes</button>
    </form>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const radioButtons = document.querySelectorAll('.radio-input');

        radioButtons.forEach(radio => {
            radio.addEventListener('change', () => {
                document.querySelectorAll('.radio-label').forEach(label => {
                    label.classList.remove('bg-blue-500', 'text-white');
                    label.classList.add('bg-white', 'text-gray-700');
                });


                const selectedLabel = radio.closest('.radio-label');
                selectedLabel.classList.add('bg-blue-500', 'text-white');
                selectedLabel.classList.remove('bg-white', 'text-gray-700');
            });
        });
    });

    </script>
@endsection


