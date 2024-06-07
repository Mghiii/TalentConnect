@extends('dashboards.admin.layout')
@section('title', 'Admin | Company Announcements')
@section('content')
<div class="container mx-auto p-4 h-screen">
    <h1 class="text-3xl font-bold mb-4">Announcements for {{ $company->company_name }}</h1>
    <a href="{{ route('admin.companies') }}" class="mb-3 inline-block bg-blue-500 text-white px-4 py-2 rounded">Back to Companies</a>
    @if ($announces->isEmpty())
        <p class="text-gray-700">No announcements available for this company.</p>
    @else
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="table-auto w-full">
                <thead class="bg-gray-200">
                    <tr class="text-left text-gray-700">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Skills</th>
                        <th class="px-4 py-2">Benefits</th>
                        <th class="px-4 py-2">Contact</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($announces as $announce)
                        <tr class="border-b">
                            <td class="px-4 py-2">{{ $announce->id }}</td>
                            <td class="px-4 py-2">{{ $announce->title }}</td>
                            <td class="px-4 py-2">{{ $announce->description }}</td>
                            <td class="px-4 py-2">{{ $announce->skills }}</td>
                            <td class="px-4 py-2">{{ $announce->benefits }}</td>
                            <td class="px-4 py-2">{{ $announce->contact }}</td>
                            <td class="px-4 py-2">
                                <a href="{{route('admin.companies.editAnnounce' , $announce->id)}}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 inline-block">Edit</a>
                                <form action="{{route('admin.companies.announcements.delete' , $announce->id)}}" method="POST" class="inline-block">
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

