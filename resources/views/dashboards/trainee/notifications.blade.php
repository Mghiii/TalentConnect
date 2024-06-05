  @extends('dashboards.layout')
  @section('title', 'Trainee | Notification')
  @section('content')
      <div class="flex">
          <div class=" w-16 border-r border-gray-100 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">
            <x-sidebar-trainee :trainee="$trainee" />
          </div>
          <div class="flex-1 p-8 overflow-y-auto">
              <div class="bg-white rounded-lg shadow-md overflow-y-auto">
                  <table class="w-full table-auto border-collapse">
                      <thead class="bg-gray-200">
                          <tr>
                              <th class="px-4 py-3 text-left">Date</th>
                              <th class="px-4 py-3 text-left">Notification</th>
                              <th class="px-4 py-3 text-left">Company name</th>
                              <th class="px-4 py-3 text-left">Status</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($offres as $offre )
                        <tr class="border-b">
                            <td class="px-4 py-3">{{$offre->offre_date}}</td>
                            <td class="px-4 py-3">{{$offre->announce->title}}</td>
                            <td class="px-4 py-3">
                                {{$offre->announce->company->username}}
                            </td>
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
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  @endsection
