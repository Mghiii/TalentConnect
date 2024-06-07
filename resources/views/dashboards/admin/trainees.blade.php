@extends('dashboards.admin.layout')
@section('title', 'Admin | Trainees')
@section('content')
<div class="container mx-auto p-4 h-screen">
    <h1 class="text-3xl font-bold mb-4">Trainees</h1>
    <a href="{{ route('admin.dashboard') }}" class="mb-3 inline-block bg-blue-500 text-white px-4 py-2 rounded">Back to Dashboard</a>
    @if ($trainees->isEmpty())
    <p class="text-gray-700">No trainees .</p>
    @else
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="table-auto w-full">
            <thead class="bg-gray-200">
                <tr class="text-left text-gray-700">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Username</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Last Name</th>
                    <th class="px-4 py-2">First Name</th>
                    <th class="px-4 py-2">Address</th>
                    <th class="px-4 py-2">Phone Number</th>
                    <th class="px-4 py-2">Domain</th>
                    <th class="px-4 py-2">Trainee Image</th>
                    <th class="px-4 py-2">Offers</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainees as $trainee)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $trainee->id }}</td>
                        <td class="px-4 py-2">{{ $trainee->username }}</td>
                        <td class="px-4 py-2">{{ $trainee->email }}</td>
                        <td class="px-4 py-2">{{ $trainee->last_name }}</td>
                        <td class="px-4 py-2">{{ $trainee->first_name }}</td>
                        <td class="px-4 py-2">{{ $trainee->address }}</td>
                        <td class="px-4 py-2">{{ $trainee->phone_number }}</td>
                        <td class="px-4 py-2">{{ $trainee->domain }}</td>
                        <td class="px-4 py-2"><img src="{{ $trainee->trainee_image }}" alt="Trainee Image" class="w-12 h-auto rounded-full"></td>
                        <td class="px-4 py-2">
                            <a href="{{ route('trainees.offers', $trainee->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 inline-block">View</a>
                            </td>
                            <td class="px-4 py-2 flex space-x-2">
                                <a href="{{ route('admin.trainee.edite', $trainee->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
                                    Edit
                                </a>
                                <form action="{{ route('trainees.destroy', $trainee->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                                        Delete
                                    </button>
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
