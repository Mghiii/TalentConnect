@extends('dashboards.admin.layout')
@section('title', 'Admin | Dashboard')
@section('content')
    <div class="container">
        <h1>Companies</h1>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary mb-3">Back to Dashboard</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Company Name</th>
                    <th>Contact Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Username</th>
                    <th>Address</th>
                    <th>Domain</th>
                    <th>Company Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->company_name }}</td>
                        <td>{{ $company->contact_name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->phone_number }}</td>
                        <td>{{ $company->username }}</td>
                        <td>{{ $company->address }}</td>
                        <td>{{ $company->domain }}</td>
                        <td><img src="{{ $company->company_image }}" alt="Company Image" width="50"></td>
                        <td>
                            <a href="{{ route('admin.companies.announcements', $company->id) }}" class="btn btn-info">View
                                Announcements</a>
                            <form action="{{ route('admin.companies.destroy', $company->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
