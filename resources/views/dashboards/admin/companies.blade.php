@extends('dashboards.admin.layout')
@section('title', 'Admin | Dashboard')

@section('content')
<div class="container mx-auto p-4 h-screen">
        <h1 class="text-3xl font-bold mb-4">Companies</h1>
        <a href="{{ route('admin.dashboard') }}" class="mb-3 inline-block bg-blue-500 text-white px-4 py-2 rounded">Back to Dashboard</a>
        @if ($companies->isEmpty())
        <p class="text-gray-700">No company .</p>
        @else
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="table-auto w-full">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Company Name</th>
                        <th class="px-4 py-2">Contact Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Phone Number</th>
                        <th class="px-4 py-2">Username</th>
                        <th class="px-4 py-2">Address</th>
                        <th class="px-4 py-2">Domain</th>
                        <th class="px-4 py-2">Company Image</th>
                        <th class="px-4 py-2">Announces</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr class="bg-white border-b">
                            <td class="px-4 py-2">{{ $company->id }}</td>
                            <td class="px-4 py-2">{{ $company->company_name }}</td>
                            <td class="px-4 py-2">{{ $company->contact_name }}</td>
                            <td class="px-4 py-2">{{ $company->email }}</td>
                            <td class="px-4 py-2">{{ $company->phone_number }}</td>
                            <td class="px-4 py-2">{{ $company->username }}</td>
                            <td class="px-4 py-2">{{ $company->address }}</td>
                            <td class="px-4 py-2">{{ $company->domain }}</td>
                            <td class="px-4 py-2"><img src="{{ $company->company_image }}" alt="Company Image" class="w-12 h-auto"></td>
                            <td class="px-4 py-2">
                                <a href="{{ route('admin.companies.announcements', $company->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 inline-block">View</a>
                                </td>
                                <td class="px-4 py-2">
                                <form action="{{ route('admin.companies.destroy', $company->id) }}" method="POST" class="inline-block">
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
