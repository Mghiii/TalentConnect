@extends('dashboards.layout')
@section('title', 'Company | Dashboard')
@section('content')

    <div class="flex h-screen">
        <div class=" w-16 border-r border-gray-100 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">
            <x-sidebar-company :company="$company" />
        </div>
        <div class="flex-1 p-8 overflow-y-auto">
            <header class="mb-8">
                <h1 class="text-3xl text-gray-800 font-bold">Welcome to Talent<span class="text-gray-500">Connect</span></h1>
                <p class="text-gray-600">Connecting businesses with top talent</p>
            </header>
            <section>
                <div class="mt-12 ">


                    <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">

                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div
                                class="bg-clip-border mx-4 overflow-hidden rounded-xl bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                                <i class="fas fa-bullhorn text-2xl"></i>
                            </div>
                            <div class="p-4 text-right">
                                <p
                                    class="block antialiased font-sans text-sm leading-normal font-semibold text-blue-gray-600">
                                    Announcements</p>
                                <h4
                                    class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                    {{ $announces->count() }}</h4>
                            </div>
                            <div class="border-t border-blue-gray-50 p-4">
                                <a href="/company/dashboard" onclick="smoothScroll(event)">
                                    <p
                                        class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                        <strong class="text-green-500">Announcements</strong>&nbsp;Management
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div
                                class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                                <i class="fas fa-paper-plane text-2xl"></i>
                            </div>
                            <div class="p-4 text-right">
                                <p
                                    class="block antialiased font-sans text-sm leading-normal font-semibold text-blue-gray-600">
                                    Intern applicants</p>
                                <h4
                                    class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                    {{ $offres->count() }}</h4>
                            </div>
                            <div class="border-t border-blue-gray-50 p-4">
                                <a href="/company/dashboard/intern-applicants">
                                    <p
                                        class="block antialiased font-sans text-base leading-relaxed font-bold text-blue-gray-600">
                                        <strong class="text-green-500">View</strong>&nbsp;All the list
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div
                                class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                                <i class="fas fa-graduation-cap text-2xl"></i>

                            </div>
                            <div class="p-4 text-right">
                                <p
                                    class="block antialiased font-sans text-sm leading-normal font-semibold text-blue-gray-600">
                                    Former interns</p>
                                <h4
                                    class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                    {{ $internships->count() }}</h4>
                            </div>
                            <div class="border-t border-blue-gray-50 p-4">
                                <a href="/company/dashboard/former-interns">
                                    <p
                                        class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                        <strong class="text-green-500">View</strong>&nbsp;All the list
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div
                                class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-orange-600 to-orange-400 text-white shadow-orange-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                                <i class="fas fa-hourglass-half text-2xl"></i>
                            </div>
                            <div class="p-4 text-right">
                                <p
                                    class="block antialiased font-sans text-sm leading-normal font-semibold text-blue-gray-600">
                                    Current interns</p>
                                <h4
                                    class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                    {{ $internships->count() }}</h4>
                            </div>
                            <div class="border-t border-blue-gray-50 p-4">
                                <a href="/company/dashboard/current-interns">
                                    <p
                                        class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                        <strong class="text-green-500">View</strong>&nbsp;All the list
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="mb-4 grid grid-cols-1 gap-6 xl:grid-cols-3">
                        <div
                            class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden xl:col-span-2">
                            <div
                                class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
                                <div>
                                    <h6
                                        class="block antialiased tracking-normal font-sans text-base underline font-bold leading-relaxed text-blue-gray-900 mb-1">
                                        Intern applicants:
                                    </h6>
                                </div>

                            </div>
                            <div class="overflow-x-auto">
                                <table class="table-auto border-collapse w-full" id="Intern applicants">
                                    <thead>
                                        <tr class="bg-gray-100">
                                            <th class="px-4 py-2">Full name</th>
                                            <th class="px-4 py-2">CV</th>
                                            <th class="px-4 py-2">Motivation</th>
                                            <th class="px-4 py-2">Linked Announcement</th>
                                            <th class="px-4 py-2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($offres as $offre)
                                            <tr
                                                class="hover:bg-gray-200 font-normal hover:font-semibold text-gray-600 hover:text-gray-800 cursor-pointer">
                                                <td
                                                    class="border px-4 py-2 text-center font-normal hover:font-semibold text-gray-600 hover:text-gray-800">
                                                    {{ $offre->trainee->first_name }} {{ $offre->trainee->last_name }}
                                                </td>
                                                <td class="border px-4 py-2 text-center">
                                                    <a href="{{ asset('storage/' . $offre->CV) }}" download>PDF</a>
                                                </td>
                                                <td class="border px-4 py-2 text-center">
                                                    <a href="{{ asset('storage/' . $offre->motivation_lettre) }}"
                                                        download>PDF-file(txt)</a>
                                                </td>
                                                <td class="border px-4 py-2 text-center">
                                                    {{ $offre->announce->title }}
                                                </td>
                                                @if ($offre->status == 'accepted')
                                                    <td class="text-center">
                                                        <i class="fas fa-check-circle text-green-500 text-xl"></i>
                                                    </td>
                                                @elseif ($offre->status == 'rejected')
                                                    <td class="text-center">
                                                        <i class="fas fa-times-circle text-red-500 text-xl"></i>
                                                    </td>
                                                @else
                                                    <td class="border px-4 py-2 flex justify-center items-center space-x-2">
                                                        <a href="{{ route('company.dashboard.internships.create', $offre->id) }}"
                                                            class="text-green-500 hover:text-green-700">
                                                            <i class="fas fa-check-circle text-xl"></i>
                                                        </a>
                                                        <form
                                                            action="{{ route('company.dashboard.internApp.rejected', $offre->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit" class="text-red-500 hover:text-red-700">
                                                                <i class="fas fa-times-circle text-xl"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
        </div>
    </div>
    </section>
    </div>
    </div>




@endsection
