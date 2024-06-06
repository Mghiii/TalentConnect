@extends('dashboards.admin.layout')
@section('title', 'Admin | Trainee Offers')
@section('content')
    <div class="container">
        <h1>Offers for {{ $trainee->username }}</h1>
        <a href="{{ route('admin.trainees') }}" class="btn btn-primary mb-3">Back to Trainees</a>
        @if ($trainee->offres->isEmpty())
            <p>No offers available for this trainee.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Offer Date</th>
                        <th>CV</th>
                        <th>Motivation Letter</th>
                        <th>Status</th>
                        <th>Announce ID</th>
                        <th>Company Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trainee->offres as $offer)
                        <tr>
                            <td>{{ $offer->id }}</td>
                            <td>{{ $offer->offre_date }}</td>
                            <td><a href="{{ $offer->CV }}" target="_blank">View CV</a></td>
                            <td>{{ $offer->motivation_lettre }}</td>
                            <td>{{ $offer->status }}</td>
                            <td>{{ $offer->announce_id }}</td>
                            <td>{{ $offer->announce->company->company_name }}</td>
                            <td>

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
