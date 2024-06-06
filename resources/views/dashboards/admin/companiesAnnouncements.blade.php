@extends('dashboards.admin.layout')
@section('title', 'Admin | Company Announcements')
@section('content')
    <div class="container">
        <h1>Announcements for {{ $company->company_name }}</h1>
        <a href="{{ route('admin.companies.index') }}" class="btn btn-primary mb-3">Back to Companies</a>
        @if ($announces->isEmpty())
            <p>No announcements available for this company.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Skills</th>
                        <th>Benefits</th>
                        <th>Contact</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($announces as $announce)
                        <tr>
                            <td>{{ $announce->id }}</td>
                            <td>{{ $announce->title }}</td>
                            <td>{{ $announce->description }}</td>
                            <td>{{ $announce->skills }}</td>
                            <td>{{ $announce->benefits }}</td>
                            <td>{{ $announce->contact }}</td>
                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <form action="#" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
