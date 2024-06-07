@extends('dashboards.admin.layout')
@section('comment', 'Admin | Edit offre')

@section('content')
<div class="container mx-auto p-4 h-screen">
    <h1 class="text-3xl font-bold mb-4">Edit offre</h1>
    @php
        $trainee = $offre->trainee_id;
    @endphp
    <a href="{{ route('trainees.offers' ,  $trainee ) }}" class="mb-3 inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Back to offrement</a>
    <form action="{{route('admin.trainee.offre.update' , $offre->id)}}"  method="post" class="max-w-md mx-auto grid grid-cols-2 gap-4"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="offre_date" class="block text-gray-700 text-sm font-bold mb-2">offre date</label>
            <input type="date" id="offre_date" value="{{ $offre->offre_date }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-500" disabled>
        </div>
        <div class="mb-4">
            <label for="CV" class="block text-gray-700 text-sm font-bold mb-2">CV</label>
            <input type="file" name="CV" id="CV"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500">
                @error('CV')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-4">
            <label for="motivation_lettre" class="block text-gray-700 text-sm font-bold mb-2">motivation_lettre</label>
            <input type="file" name="motivation_lettre" id="motivation_lettre"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500">
                @error('motivation_lettre')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
        </div>
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded col-span-2 focus:outline-none focus:ring focus:ring-blue-500">Save
            Changes</button>
    </form>
</div>
@endsection


