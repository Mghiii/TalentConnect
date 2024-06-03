@extends('dashboards.layout')
@section('title', 'Company | Notifications')
@section('content')
    <div class="flex">
        <div class=" w-16 border-r border-gray-100 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">
            <x-sidebar-company  :company="$company" />
        </div>
        <div class="flex-1 p-8 overflow-y-auto">
            <div class="bg-white rounded-lg shadow-md overflow-y-auto">
                <table class="w-full table-auto border-collapse">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-4 py-3 text-left">Date</th>
                            <th class="px-4 py-3 text-left">Notification</th>
                            <th class="px-4 py-3 text-left">Status</th>
                            <th class="px-4 py-3 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($announces as $announce )
                        @foreach ($announce->offres as $offre )
                        <tr class="border-b">
                            <td class="px-4 py-3">{{$offre->offre_date}}</td>
                            <td class="px-4 py-3">{{$offre->announce->title}}</td>
                            @if ($offre->status == 'accepted')
                            <td class="px-4 py-3">
                                <span class="bg-green-200 text-green-800 px-2 py-1 rounded-full">{{$offre->status}}</span>
                            </td>
                            @elseif ($offre->status == 'rejected')
                            <td class="px-4 py-3">
                                <span class="bg-red-200 text-red-800 px-2 py-1 rounded-full">{{$offre->status}}</span>
                            </td>
                            @else
                            <td class="px-4 py-3">
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">{{$offre->status}}</span>
                            </td>
                            @endif

                            <td class="px-4 py-3">
                                <a href="{{route('company.dashboard.internFormer')}}" class="text-blue-500 hover:text-blue-700">show more</a>
                            </td>
                        </tr>
                        @endforeach
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
