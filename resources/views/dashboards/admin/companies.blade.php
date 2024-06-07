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

            <div class="bg-white rounded-lg shadow-md p-6">
                <h1 class="text-3xl font-bold mb-4">Companies</h1>

                @if ($companies->isEmpty())
                    <p class="text-gray-700">No companies found.</p>
                @else
                    <div class="max-h-[500px] overflow-y-auto">
                        <table class="w-full table-auto">
                            <thead class="bg-gray-200 text-gray-700">
                                <tr>
                                    <th class="px-4 py-3 text-left font-semibold">ID</th>
                                    <th class="px-4 py-3 text-left font-semibold">Company Name</th>
                                    <th class="px-4 py-3 text-left font-semibold">Contact Name</th>
                                    <th class="px-4 py-3 text-left font-semibold">Email</th>
                                    <th class="px-4 py-3 text-left font-semibold">Phone Number</th>
                                    <th class="px-4 py-3 text-left font-semibold">Username</th>
                                    <th class="px-4 py-3 text-left font-semibold">Address</th>
                                    <th class="px-4 py-3 text-left font-semibold">Domain</th>
                                    <th class="px-4 py-3 text-left font-semibold">Announces</th>
                                    <th class="px-4 py-3 text-left font-semibold">Internships</th>
                                    <th class="px-4 py-3 text-left font-semibold">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($companies as $company)
                                    <tr>
                                        <td class="px-4 py-3">{{ $company->id }}</td>
                                        <td class="px-4 py-3">{{ $company->company_name }}</td>
                                        <td class="px-4 py-3">{{ $company->contact_name }}</td>
                                        <td class="px-4 py-3">{{ $company->email }}</td>
                                        <td class="px-4 py-3">{{ $company->phone_number }}</td>
                                        <td class="px-4 py-3">{{ $company->username }}</td>
                                        <td class="px-4 py-3">{{ $company->address }}</td>
                                        <td class="px-4 py-3">{{ $company->domain }}</td>
                                        <td class="px-4 py-3">
                                            <a href="{{ route('admin.companies.announcements', $company->id) }}"
                                                class="text-blue-500 hover:text-blue-600 transition-colors">
                                                <i class="fas fa-list"></i>
                                            </a>
                                        </td>
                                        <td class="px-4 py-3">
                                            <a href="{{ route('admin.companies.internships', $company->id) }}"
                                                class="text-blue-500 hover:text-blue-600 transition-colors">
                                                <i class="fas fa-briefcase"></i>
                                            </a>
                                        </td>
                                        <td class="px-4 py-3 text-sm text-gray-500">
                                            <a href="{{ route('admin.companies.editCompany', $company->id) }}"
                                                class="text-yellow-500 hover:text-yellow-600 transition-colors">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.companies.destroy', $company->id) }}"
                                                method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-500 hover:text-red-600 transition-colors">
                                                    <i class="fas fa-trash"></i>
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
