@extends('dashboards.admin.layout')
@section('title', 'Admin | Trainee Offers')
@section('content')
<div class="container mx-auto p-4 h-screen">
    <h1 class="text-3xl font-bold mb-4">Offers for {{ $trainee->username }}</h1>
    <a href="{{ route('admin.trainees') }}" class="mb-3 inline-block bg-blue-500 text-white px-4 py-2 rounded">Back to Trainees</a>
    @if ($trainee->offres->isEmpty())
        <p class="text-gray-700">No offers available for this trainee.</p>
    @else
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="table-auto w-full">
                <thead class="bg-gray-200">
                    <tr class="text-left text-gray-700">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Offer Date</th>
                        <th class="px-4 py-2">CV</th>
                        <th class="px-4 py-2">Motivation Letter</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Announce ID</th>
                        <th class="px-4 py-2">Company Name</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trainee->offres as $offre)
                        <tr class="border-b">
                            <td class="px-4 py-2">{{ $offre->id }}</td>
                            <td class="px-4 py-2">{{ $offre->offre_date }}</td>
                            <td class="px-4 py-2"><a href="{{ asset('storage/'. $offre->CV )}}" target="_blank" class="text-blue-500 hover:underline" download>View CV</a></td>
                            <td class="px-4 py-2"><a href="{{ asset('storage/'. $offre->motivation_lettre) }}" download  target="_blank" class="text-blue-500 hover:underline" >View motivation lettere</a></td>
                            <td class="px-4 py-2">{{ $offre->status }}</td>
                            <td class="px-4 py-2">{{ $offre->announce_id }}</td>
                            <td class="px-4 py-2">{{ $offre->announce->company->company_name }}</td>
                            <td class="px-4 py-2">
                                <form action="{{route('admin.trainee.offre.delete' , $offre->id)}}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
