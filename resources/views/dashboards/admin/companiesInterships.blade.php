@extends('dashboards.admin.layout')
@section('title', 'Admin | Company Interships')
@section('content')
<div class="container mx-auto p-4 h-screen">
    <h1 class="text-3xl font-bold mb-4">interships for {{ $company->company_name }}</h1>
    <a href="{{ route('admin.companies') }}" class="mb-3 inline-block bg-blue-500 text-white px-4 py-2 rounded">Back to Companies</a>
    @if ($internships->isEmpty())
        <p class="text-gray-700">No interships available for this company.</p>
    @else
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="table-auto w-full">
                <thead class="bg-gray-200">
                    <tr class="text-left text-gray-700">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Trainee name</th>
                        <th class="px-4 py-2">Announce title</th>
                        <th class="px-4 py-2">Start date</th>
                        <th class="px-4 py-2">End date</th>
                        <th class="px-4 py-2">Certificate</th>
                        <th class="px-4 py-2">Comment</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($internships as $internship)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $internship->id }}</td>
                        <td class="px-4 py-2">{{ $internship->trainee->first_name }}</td>
                        <td class="px-4 py-2">{{ $internship->offre->announce->title }}</td>
                        <td class="px-4 py-2">{{ $internship->start_date }}</td>
                        <td class="px-4 py-2">{{ $internship->end_date }}</td>
                        <td class="px-4 py-2">
                            @if ($internship->certificate)
                            <a href="{{ asset('storage/'. $internship->certificate )}}" target="_blank" class="text-blue-500 hover:underline" download>View certificate</a>
                            @else
                            No certificate
                            @endif
                        </td>
                        <td class="px-4 py-2">{{ $internship->comment }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('admin.companies.editeInternship', $internship->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 inline-block">Edit</a>
                            <form action="{{ route('admin.companies.internships.delete', $internship->id) }}" method="POST" class="inline-block">
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

