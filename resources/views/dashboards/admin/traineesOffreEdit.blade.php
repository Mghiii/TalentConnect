@extends('dashboards.admin.layout')
@section('comment', 'Admin | Edit offre')

@section('content')
<div class="container mx-auto p-4 h-screen">
    <h1 class="text-3xl font-bold mb-4">Edit offre</h1>
    @php
        $trainee = $offre->trainee_id;
    @endphp
    <a href="{{ route('trainees.offers' ,  $trainee ) }}" class="mb-3 inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Back to offrement</a>
    <div class="container mx-auto mt-10 p-6 bg-gray-100 rounded-lg shadow-lg">
    <form action="{{ route('admin.trainee.offre.update' , $offre->id) }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="offre_date" class="block text-gray-700 text-sm font-bold mb-2">offre date</label>
        <input type="date" id="offre_date" value="{{ $offre->offre_date }}"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500" disabled>
    </div>
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
    <div class="mt-8">
        <button type="submit"
            class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition-colors">Submit</button>
    </div>
</form>
</div>
</div>
@endsection


