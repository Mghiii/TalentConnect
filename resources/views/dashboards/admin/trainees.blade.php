@extends('dashboards.admin.layout')
@section('title', 'Admin | Trainees')
@section('content')

    <div class="flex min-h-screen bg-gray-100">

        <div class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2 hidden md:block rounded-3xl">
            <div class="text-center text-2xl font-bold">
                Admin
            </div>
            <nav class="mt-10">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center px-4 py-2 mt-2 text-gray-200 bg-gray-700 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z" />
                    </svg>
                    Dashboard
                </a>
                <a href="{{ route('admin.trainees') }}"
                    class="flex items-center px-4 py-2 mt-2 text-gray-200 hover:bg-gray-700 rounded-md transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd" />
                    </svg>
                    Trainees
                </a>
                <a href="{{ route('admin.companies') }}"
                    class="flex items-center px-4 py-2 mt-2 text-gray-200 hover:bg-gray-700 rounded-md transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                            clip-rule="evenodd" />
                    </svg>
                    Companies
                </a>
            </nav>
        </div>
        <div class="flex-1 p-6">
            <header class="bg-white shadow-md py-4 px-6 flex justify-between items-center mb-6 md:flex flex-col">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400 mr-2" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z" />
                    </svg>
                    <h1 class="text-2xl font-bold text-gray-800">Admin Dashboard</h1>
                </a>
                <br>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('admin.trainees') }}"
                        class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-md transition duration-300">
                        <span class="mr-2">Trainees</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="{{ route('admin.companies') }}"
                        class="px-4 py-2 bg-white border border-gray-400 hover:bg-gray-100 text-gray-700 rounded-md transition duration-300">
                        <span class="mr-2">Companies</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </header>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center">
                    <div class="bg-blue-500 text-white rounded-full p-3 mr-4">
                        <i class="fas fa-user-graduate text-2xl"></i>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-700">Total Trainees</h2>
                        <p class="mt-2 text-3xl font-bold text-gray-900">{{ $totalTrainees }}</p>

                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center">
                    <div class="bg-green-500 text-white rounded-full p-3 mr-4">
                        <i class="fas fa-building text-2xl"></i>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-700">Total Companies</h2>
                        <p class="mt-2 text-3xl font-bold text-gray-900">{{ $totalCompanies }}</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center">
                    <div class="bg-yellow-500 text-white rounded-full p-3 mr-4">
                        <i class="fas fa-bullhorn text-2xl"></i>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-700">Total Announcements</h2>
                        <p class="mt-2 text-3xl font-bold text-gray-900">{{ $totalAnnouncements }}</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center">
                    <div class="bg-red-500 text-white rounded-full p-3 mr-4">
                        <i class="fas fa-briefcase text-2xl"></i>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-700">Total Internships</h2>
                        <p class="mt-2 text-3xl font-bold text-gray-900">{{ $totalInternships }}</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center">
                    <div class="bg-purple-500 text-white rounded-full p-3 mr-4">
                        <i class="fas fa-hand-holding-usd text-2xl"></i>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-700">Total Offers</h2>
                        <p class="mt-2 text-3xl font-bold text-gray-900">{{ $totalOffers }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6 overflow-x-auto">
                <h1 class="text-3xl font-bold mb-4">Trainees</h1>
                @if ($trainees->isEmpty())
                    <p class="text-gray-700">No trainees.</p>
                @else
                    <div class="max-h-[500px] overflow-y-auto">
                        <table class="w-full table-auto">
                            <thead class="bg-gray-200 text-gray-700">
                                <tr>
                                    <th class="px-4 py-3 text-left font-semibold">ID</th>
                                    <th class="px-4 py-3 text-left font-semibold">Username</th>
                                    <th class="px-4 py-3 text-left font-semibold">Email</th>
                                    <th class="px-4 py-3 text-left font-semibold">Last Name</th>
                                    <th class="px-4 py-3 text-left font-semibold">First Name</th>
                                    <th class="px-4 py-3 text-left font-semibold">Address</th>
                                    <th class="px-4 py-3 text-left font-semibold">Phone Number</th>
                                    <th class="px-4 py-3 text-left font-semibold">Domain</th>
                                    <th class="px-4 py-3 text-left font-semibold">Offers</th>
                                    <th class="px-4 py-3 text-left font-semibold">Internships</th>
                                    <th class="px-4 py-3 text-left font-semibold">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($trainees as $trainee)
                                    <tr>
                                        <td class="px-4 py-3">{{ $trainee->id }}</td>
                                        <td class="px-4 py-3">{{ $trainee->username }}</td>
                                        <td class="px-4 py-3">{{ $trainee->email }}</td>
                                        <td class="px-4 py-3">{{ $trainee->last_name }}</td>
                                        <td class="px-4 py-3">{{ $trainee->first_name }}</td>
                                        <td class="px-4 py-3">{{ $trainee->address }}</td>
                                        <td class="px-4 py-3">{{ $trainee->phone_number }}</td>
                                        <td class="px-4 py-3">{{ $trainee->domain }}</td>
                                        <td class="px-4 py-3 ">
                                            <a href="{{ route('trainees.offers', $trainee->id) }}"
                                                class="text-blue-500 hover:text-blue-600">
                                                <svg class="w-6 h-6 " fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    <path fill-rule="evenodd"
                                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </td>
                                        <td class="px-4 py-3 ">
                                            <a href="{{ route('admin.trainee.internships', $trainee->id) }}"
                                                class="text-blue-500 hover:text-blue-600">
                                                <svg class="w-6 h-6 " fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    <path fill-rule="evenodd"
                                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </td>
                                        <td class="px-4 py-3 flex space-x-2">
                                            <a href="{{ route('admin.trainee.edit', $trainee->id) }}"
                                                class="text-yellow-500 hover:text-yellow-600">
                                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                </svg>
                                            </a>
                                            <form action="{{ route('trainees.destroy', $trainee->id) }}" method="POST"
                                                class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-600">
                                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
                <a href="{{ route('admin.dashboard') }}"
                    class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Back to
                    Dashboard</a>
            </div>
        </div>
    </div>


@endsection
