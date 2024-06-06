@extends('dashboards.admin.layout')
@section('title', 'Admin | Dashboard')
@section('content')
    <div class="container my-4">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link @if (request()->is('admin/trainees*')) active @endif"
                    href="{{ route('admin.trainees') }}">Trainees</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (request()->is('admin/companies*')) active @endif"
                    href="{{ route('admin.companies') }}">Companies</a>
            </li>
        </ul>
    </div>

@endsection
