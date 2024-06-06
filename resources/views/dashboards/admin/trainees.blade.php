@extends('dashboards.admin.layout')
@section('title', 'Admin | Trainees')
@section('content')
    <div class="container">
        <h1>Trainees</h1>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary mb-3">Back to Dashboard</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Domain</th>
                    <th>Trainee Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainees as $trainee)
                    <tr>
                        <td>{{ $trainee->id }}</td>
                        <td>{{ $trainee->username }}</td>
                        <td>{{ $trainee->email }}</td>
                        <td>{{ $trainee->last_name }}</td>
                        <td>{{ $trainee->first_name }}</td>
                        <td>{{ $trainee->address }}</td>
                        <td>{{ $trainee->phone_number }}</td>
                        <td>{{ $trainee->domain }}</td>
                        <td><img src="{{ $trainee->trainee_image }}" alt="Trainee Image" width="50"></td>
                        <td>
                            <a href="{{ route('trainees.offers', $trainee->id) }}" class="btn btn-info">View Offers</a>
                            <form action="{{ route('trainees.destroy', $trainee->id) }}" method="POST"
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
